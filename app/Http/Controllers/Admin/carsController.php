<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Http\Controllers\Controller;
use App\Models\Brand;

class carsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

       
        $cars = Car::when($request->name, function ($query, $value) {
            $query->where(function ($query) use ($value) {
                $query->where('cars.name', 'LIKE', "%{$value}%")
                    ->orWhere('cars.description', 'LIKE', "%{$value}%");
            });
        })
            ->when($request->parent_id, function ($query, $value) {
                $query->where('cars.parent_id', '=', $value);
            })

/*->leftJoin('cars as parents', 'parents.id', '=', 'cars.parent_id')
            ->select([
                'cars.*', //select all column in car list
                'parents.name as parent_name'
            ])*/
            ->with('parent')
            ->get();

        $parents = Car::orderBy('name', 'asc')->get();
        return view('admin.cars.index', [
            'cars' => $cars,
            'parents' => $parents,
         
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
        $parents = Car::orderBy('name', 'asc')->get();
        //   $title='Add Car';
        // dd(compact('parents','title'));
      
        return view(
            'admin.cars.create',
            //  compact('parents','title'))
            [
                'parents' => $parents,
                'title' => 'Add Car',
                'car' => new Car(),
              
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
        $car = new Car();
        $car->name = $request->name; // $request->get('name')
        $car->slug = Str::slug($request->name);
        $car->licences_number = $request->licences_number;
        $car->end_licences_date = $request->end_licences_date;
        $car->description=$request->description;
        $car->parent_id = $request->post('parent_id');
        $car->color = $request->color;
        $car->car_number = $request->car_number;
        $car->status = $request->status;
     
      
        $car->save();
        return redirect('/admin/cars')->with('success', 'Car added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.cars.show', [
            'car' => car::findOrFail($id)
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
        $car = Car::find($id);
        //where('id','=',$id)->first();

        $parents = Car::where('id', '<>', $id)
            ->orderBy('name', 'asc')
            ->get();
        return view('admin.cars.edit', [
            'id' => $id,
            'car' => $car,
            'parents' => $parents,
            'cars' => Car::all(),
          
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
        $car = Car::find($id);
        if ($car == null) {
            abort(404);
        }
        $car->name = $request->name; // $request->get('name')
        $car->slug = Str::slug($request->name);
        $car->licences_number = $request->licences_number;
        $car->end_licences_date = $request->end_licences_date;
        $car->description=$request->description;
        $car->parent_id = $request->post('parent_id');
        $car->color = $request->color;
        $car->car_number = $request->car_number;
        $car->status = $request->status;
        $car->save();
        return redirect('/admin/cars')->with('success', 'Car updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Car::destroy($id);

        return redirect('/admin/cars')->with('error', 'Car deleted!');
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
            'licences_number' => [
                'required',
             //   Rule::unique('cars', 'licences_number')->ignore($id),
            ],

            'end_licences_date' => [
                'required'
            ],
            'color' => [
                'required'
            ],

            'car_number' => [
                'required',
              //  Rule::unique('cars', 'car_number')->ignore($id),
            ],

            'description' => [
                'nullable',

            ],
            'parent_id' => [
                'nullable',
                'exists:cars,id'
            ],
            'image' => [
                'nullable',
                'image',
                'max:1048576', //1M
                'dimensions:min_width=200,min_height=200'
            ],
            'status' => 'required|in:Available,Unavailable',
        ],);
    }
    public function storeModel(Request $request, $id)
    {
        $car = Car::findOrFail($id);

        $model = $car->model()->create([
            'name' => 'Model Name',
            'price' => 10,
            //ما ببعت هي id
            // لانه باخده من العلاقة اللي فوق
        ]);
}
}