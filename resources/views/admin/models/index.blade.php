<x-dashboard-layout >
<div class="container  col-lg-10"> 
    <h2 >Models list</h2>
     <x-alert/>

    <div class="table-toolbar mb-3" >
        <a href="{{route('admin.models.create')}}" class="btn btn-info">Create</a>
    </div>
    <form action="/admin/models"method="get"class="form-inline" >
    <input name="text" type="text" class="form-control "placeholder="   Search by Name   ">
    <select name="car" class="form-control ">
    <option value="">     All Cars    </option>
            @foreach($cars as $car)
            <option value="{{ $car->id }}">{{ $car->name }}</option>
            @endforeach
    </select>
   
    <button type="submit"class="btn btn-primary"> Filter </button>
    <br> <br>
</form>
    <table class="table ">
        <thead  class=th>
            <tr>
                <th>ID</th>
                <th>Name</th>
                 <th>Car</th>
                 <th>Brand</th>
                 <th>Fuel_type</th>
                <th>Motor_type</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Created_at</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($models as $model)
            <tr>
                <td >{{ $model->id }}</td>
                <td><a href="{{route('admin.models.edit',$model->id)}}">{{$model->name}}</a></td>
                <td>{{ $model->car->name}}</td>
                <td>{{ $model->brand->name}}</td>
                <td>{{ $model->fuel_type }}</td>
                <td>{{ $model->motor_type }}</td>
                <td>{{ $model->price }}</td>
                <td>{{ $model->quantity }}</td>
                <td>{{ $model->status }}</td>
                <td>{{ $model->created_at }}</td>
                <td>
                    <form action="/admin/models/{{$model->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
          
           
            @endforeach
        </tbody>
    </table>
</div>
</div>
{{ $models->links() }}
</x-dashboard-layout>