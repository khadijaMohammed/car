<x-dashboard-layout>
<x-alert/>
<div class="container col-lg-8 "> 
    <h2>Edit Brand</h2>
    <br>

    <form  action="/admin/brands/{{$id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
  
    @include('admin.brands._form',[
        'button_label'=>'Update'])  
    </form>

</div>
    </x-dashboard-layout>