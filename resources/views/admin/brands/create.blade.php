<x-dashboard-layout>
<div class="container col-lg-8 "> 
    <h2>Add Brand</h2>
    <br>
    <x-alert/>

    <form  action="/admin/brands" method="post" enctype="multipart/form-data">
        @csrf
        @include('admin.brands._form',[
        'button_label'=>'Add']) 

    </form>
</div>

        </x-dashboard-layout>