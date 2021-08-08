<?php

namespace App\Http\Controllers\Admin;


use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $brands = Brand::get();//  حسب الاسم برتب من الاخر
       // برتب حسب الاسم 
        return view('admin.brands.index', [
        'brands' => $brands,
 
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // order return object in query builder
      
        return view(  'admin.brands.create',
            [   
                'brand' => new Brand(),
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateRequest($request);
        $brand = new Brand();
        $brand->name = $request->name; // $request->get('name')
        $brand->slug = Str::slug($request->name);
        $brand->image = $request->image;
        $brand->status = $request->status;
     
      
        $brand->save();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data['image'] = $file->store('/');
        }
        return redirect('/admin/brands')->with('success', 'Brand added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.brands.show', [
            'brand' => Brand::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //بدي أحصل على القيم الحالية اللي محتاجة أغيرها 
        $brand = Brand::find($id);
        //where('id','=',$id)->first();

        
        return view('admin.brands.edit', [
            'id' => $id,
            'brand' => $brand,
          
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validateRequest($request);
        $brand = Brand::find($id);
        if ($brand == null) {
            abort(404);
        }
        $brand->name = $request->name; // $request->get('name')
        $brand->slug = Str::slug($request->name);
        $brand->image = $request->image;
        $brand->status = $request->status;
     
      
        $brand->save();
        $data = $request->all();
        $previous = false;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data['image'] = $file->store('/images', [
                'disk' => 'uploads'
            ]);
            $previous = $brand->image;
        }

        $brand->update($data);
        if ($previous) {
            Storage::disk('uploads')->delete($previous);
        }

     
        return redirect('/admin/brands')->with('success', 'Brand updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();

        if ($brand->image) {
            Storage::disk('uploads')->delete($brand->image);
        }

        return redirect('/admin/brands')->with('error', 'Brand deleted!');
    }


    protected function validateRequest(Request $request, $id = 0)
    {
        return $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                'min:3',
            ],
          

            'image' => [
                'nullable',
                'image',
                'max:1048576', //1M
               
            ],
            'status' => 'required|in:active,inactive',
        ],);
    }

}