@if ($errors->any())
<div class="alert alert-danger">
    Error!
    <ul>
        @foreach($errors->all() as $message)
        <li>{{ $message }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="form-group mb-3">
    <label for="">Name:</label>
    <input type="text" name="name" value="{{ old('name', $model->name) }}" class="form-control @error('name') is-invalid @enderror">
    @error('name')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>


<div class="form-group mb-3">
    <label for="">Car:</label>
    <select name="car_id" class="form-control @error('car_id') is-invalid @enderror">
        <option value="">Select Car</option>
        @foreach ($cars as $car)
        <option value="{{ $car->id }}" @if($car->id == old('car_id', $model->car_id)) selected @endif>{{ $car->name }}</option>
        @endforeach
    </select>
    @error('car_id')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group mb-3">
    <label for="">Brand:</label>
    <select name="brand_id" class="form-control @error('brand_id') is-invalid @enderror">
        <option value="">Select Brand</option>
        @foreach ($brands as $brand)
        <option value="{{ $brand->id }}" @if($brand->id == old('brand_id', $model->brand_id)) selected @endif>{{ $brand->name }}</option>
        @endforeach
    </select>
    @error('brand_id')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-3">
    <label for="">Image:</label>
    <div class="mb-2">
        <img src="{{ $model->image_url }}" height="200" alt="">
    </div>   
    <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror">
    
    @error('image')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>


  
<div class="form-group mb-3">
    <label for="">Gallery:</label>
    <div class="row">
        @foreach ($model->images as $image)
        <div class="col-md-2">
            <img src="{{ $image->image_url }}" height="80" class="d-block img-fit m-1 border p-1">
            <button class="btn btn-sm btn-danger" onclick="deleteImage('{{ $image->id }}')">Delete</button>
        </div>
        @endforeach
    </div>
    <input type="file" name="gallery[]" multiple class="form-control-file @error('gallery') is-invalid @enderror">
    @error('gallery')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group mb-3">
    <label for="">Fuel_type:</label>
    <input type="text" name="fuel_type" value="{{ old('fuel_type', $model->fuel_type) }}" class="form-control @error('fuel_type') is-invalid @enderror">
    @error('fuel_type')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group mb-3">
    <label for="">Release_year:</label>
    <input type="date" name="release_year" value="{{ old('release_year', $model->release_year) }}" class="form-control @error('release_year') is-invalid @enderror">
    @error('release_year')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group mb-3">
    <label for="">Seats:</label>
    <input type="number" name="seats" value="{{ old('seats', $model->seats) }}" class="form-control @error('seats') is-invalid @enderror">
    @error('seats')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>


<div class="form-group mb-3">
    <label for="">Motor_type:</label>
    <div>
        <label><input type="radio" name="motor_type" value="solar" @if (old('motor_type', $model->motor_type) == 'solar') checked @endif>
        Solar</label>
        <label><input type="radio" name="motor_type" value="petrol" @if (old('motor_type', $model->motor_type) == 'petrol') checked @endif>
        Petrol</label>
        <label><input type="radio" name="motor_type" value="diesel" @if (old('motor_type', $model->motor_type) == 'diesel') checked @endif>
        Diesel</label>
    </div>
    @error('motor_type')
    <p class="invalid-feedback d-block">{{ $message }}</p>
    @enderror
</div>


<div class="form-group mb-3">
    <label for="">Specifications:</label>
    <textarea name="Specifications" class="form-control @error('Specifications') is-invalid @enderror">{{ old('Specifications', $model->Specifications) }}</textarea>
    @error('Specifications')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-3">
    <label for="">Price:</label>
    <input type="number" name="price" value="{{ old('price', $model->price) }}" class="form-control @error('price') is-invalid @enderror">
    @error('price')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-3">
    <label for="">Sale Price:</label>
    <input type="number" name="sale_price" value="{{ old('sale_price', $model->sale_price) }}" class="form-control @error('sale_price') is-invalid @enderror">
    @error('sale_price')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>


<div class="form-group mb-3">
    <label for="">Tag:</label>
    <input type="text" name="tags" value="{{ old('tags', $tags) }}" class="tags form-control @error('tag') is-invalid @enderror">
    @error('tags')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group mb-3">
    <label for="">Quantity:</label>
    <input type="number" name="quantity" value="{{ old('quantity', $model->quantity) }}" class="form-control @error('quantity') is-invalid @enderror">
    @error('quantity')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group mb-3">
    <label for="">Status:</label>
    <div>
        <label><input type="radio" name="status" value="in-stock" @if (old('status', $model->status) == 'in-stock') checked @endif>
            In Stock</label>
        <label><input type="radio" name="status" value="sold-out" @if (old('status', $model->status) == 'sold-out') checked @endif>
            Sold Out</label>
        <label><input type="radio" name="status" value="draft" @if (old('status', $model->status) == 'draft') checked @endif>
            Draft</label>
    </div>
    @error('status')
    <p class="invalid-feedback d-block">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button_label ?? 'Save' }}</button>
</div>


@push('css')
<link rel="stylesheet" href="{{ asset('assets/js/tagify/tagify.css') }}">
@endpush

@push('js')
<form action="" method="post" id="deleteGallery" class="d-none">
@csrf
<input type="hidden" name="id" id="imageId">
</form>
<script src="{{ asset('assets/js/tagify/tagify.min.js') }}"></script>
<script>
var inputElm = document.querySelector('.tags'),
    tagify = new Tagify (inputElm);


function deleteImage(id) {
    document.querySelector('#imageId').value = id;
    document.querySelector('#deleteGallery').submit();
}
</script>
@endpush