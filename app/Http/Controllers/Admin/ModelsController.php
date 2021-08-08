<?php

namespace App\Http\Controllers\Admin;


use App\Models\Car;
use App\Models\Tag;
use App\Models\Brand;
use App\Models\Modell;
use App\Models\ModelImage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Modell::with('brand') ;
        $models = Modell::with('car') //WITH RELATION عشان يعمل   Eggar load
            ->latest() //  حسب الاسم برتب من الاخر
            ->orderBy('name', 'ASC') // برتب حسب الاسم 
            ->paginate(5); //للتقسيم 

        return view('admin.models.index', [
            'models' => $models,
            'cars' => Car::all(),
            'brands' => Brand::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.models.create', [
            'model' => new Modell(),
            'cars' => Car::all(),
            'brands' => Brand::all(),
            'tags' => '',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(Modell::validateRules());
        $request->merge([
            'slug' => Str::slug($request->post('name')),
            'brand_id' => 1,

        ]);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data['image'] = $file->store('/');
        }
        $model = Modell::create($data);
        $model->tags()->attach($this->getTags($request)); //delete and create

        return redirect()->route('admin.models.index')
            ->with('success', "Model ($model->name) created!");
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Modell::findOrFail($id);
        return view('admin.models.show', [
            'model' => $model,
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
        $model = Modell::findOrFail($id);
        $tags = $model->tags()->pluck('name')->toArray();
        return view('admin.models.edit', [
            'id' => $id,
            'model' => $model,
            'cars' => Car::all(),
            'brands' => Brand::all(),
            'tags' => implode(',', $tags),

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @p aram  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $model = Modell::findOrFail($id);
        $request->validate(Modell::validateRules());
        $data = $request->all();
        $previous = false;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data['image'] = $file->store('/images', [
                'disk' => 'uploads'
            ]);
            $previous = $model->image;
        }

        $model->update($data);
        if ($previous) {
            Storage::disk('uploads')->delete($previous);
        }
        $model->tags()->sync($this->getTags($request)); //delete and create


           // Gallery
           if ($request->hasFile('gallery')) {
            foreach ( $request->file('gallery') as $file ) {
                $image_path = $file->store('/images', [
                    'disk' => 'uploads'
                ]);
                
                $image = new ModelImage([
                    'image_path' => $image_path,
                ]);
                $model->images()->save($image);
            }
        

        
    }
    return redirect()->route('admin.models.index')->with('success', 'Model updated!');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Modell::findOrFail($id);
        $model->delete();

        if ($model->image) {
            Storage::disk('uploads')->delete($model->image);
        }

        return redirect()->route('admin.models.index')
            ->with('error', "Model ($model->name) deleted!");
    }

    protected function getTags(Request $request)
    {
        $tag_ids = [];

        $tags = $request->post('tags');
        $tags = json_decode($tags);
        //DB::table('model_tag')->where('model_id', '=', $model->id)->delete();
        if (is_array($tags) && count($tags) > 0) {

            foreach ($tags as $tag) {
                $tag_name = $tag->value;
                $tagModel = Tag::firstOrCreate([
                    'name' => $tag_name
                ], [
                    'slug' => Str::slug($tag_name)
                ]);

                /*DB:table('model_tag')->insert([
                    'model_id' => $model->id,
                    'tag_id' => $tagModel->id,
                ]);*/
                $tag_ids[] = $tagModel->id;
            }
        }
        return $tag_ids;
    } 
}
