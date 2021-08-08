<x-dashboard-layout >
<div class="container  col-lg-10"> 
    <h2 >Cars list</h2>
     <x-alert/>

    <div class="table-toolbar mb-3" >
        <a href="{{route('admin.cars.create')}}" class="btn btn-info">Create</a>
    </div>
    <form action="/admin/cars"method="get"class="form-inline" >
    <input name="text" type="text" class="form-control "placeholder="   Search by Name   ">
    <select name="parent_id" class="form-control ">
    <option value="">     All Cars     </option>
            @foreach($parents as $parent)
            <option value="{{ $parent->id }}">{{ $parent->name }}</option>
            @endforeach
    </select>
   
    <button type="submit"class="btn btn-primary"> Filter </button>
    <br> <br>

    
</form>
    <table class="table ">
        <thead class=th>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Parent Name</th>
               
                <th>licences_number</th>
                <th>Car_number</th>
                <th>Created_at</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($cars as $car)
            <tr>
                <td >{{ $car->id }}</td>
                <td><a href="{{route('admin.cars.edit',$car->id)}}">{{$car->name}}</a></td>
                <td>{{ $car->parent->name}}</td>
           
                <td>{{ $car->licences_number }}</td>
                <td>{{ $car->car_number }}</td>
                <td>{{ $car->created_at }}</td>
                <td>{{ $car->status }}</td>
                <td>
                    <form action="/admin/cars/{{$car->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
          
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</x-dashboard-layout>