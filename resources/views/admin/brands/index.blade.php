<x-dashboard-layout >
<div class="container  col-lg-10"> 
    <h2 >Brands list</h2>
     <x-alert/>

    <div class="table-toolbar mb-3" >
        <a href="{{route('admin.brands.create')}}" class="btn btn-info">Create</a>
    </div>
    <form action="/admin/brands"method="get"class="form-inline" >
   
   
  
    <br> <br>

    
</form>
    <table class="table ">
        <thead class=th>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>       image</th>
                <th>status</th>
                <th>Created_at</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($brands as $brand)
            <tr>
                <td >{{ $brand->id }}</td>
                <td><a href="{{route('admin.brands.edit',$brand->id)}}">{{$brand->name}}</a></td>
                <td><img src="{{$brand->image_url}}" height="50" alt=""></td>
                <td>{{ $brand->status }}</td>
                <td>{{ $brand->created_at }}</td>
              
                <td>
                    <form action="/admin/brands/{{$brand->id}}" method="post">
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