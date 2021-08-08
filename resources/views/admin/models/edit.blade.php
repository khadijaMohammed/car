<x-dashboard-layout>
<x-alert/>
<div class="container col-lg-8 "> 
    <h2>Edit Model</h2>
    <br>

    <form  action="{{ route('admin.models.update',$model->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
  
    @include('admin.models._form',[
        'button_label'=>'Update'])  
    </form>

</div>
    </x-dashboard-layout>