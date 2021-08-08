<x-dashboard-layout>
<div class="container col-lg-8 "> 
    <h2>Add Model</h2>
    <br>
    <x-alert/>

    <form  action="/admin/models" method="post" enctype="multipart/form-data">
        @csrf
        @include('admin.models._form',[
        'button_label'=>'Add']) 

    </form>
</div>

        </x-dashboard-layout>