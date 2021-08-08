<x-dashboard-layout>
<div class="container col-lg-8 "> 
    <h2>Add Car</h2>
    <br>
    <x-alert/>

    <form  action="/admin/cars" method="post" enctype="multipart/form-data">
        @csrf
        @include('admin.cars._form',[
        'button_label'=>'Add']) 

    </form>
</div>

        </x-dashboard-layout>