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
    <input type="text" name="name" value="{{ old('name', $car->name) }}" class="form-control @error('name') is-invalid @enderror">
    @error('name')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group mb-3">
    <label for="">Parent:</label>
    <select name="parent_id" class="form-control @error('parent_id') is-invalid @enderror">
        <option value="">No Parent</option>
        @foreach($parents as $parent)
        <option value="{{$parent->id}}" @if($parent->id == old('parent_id', $car->parent_id))
            selected @endif >{{ $parent->name }}</option>
        @endforeach
    </select>

</div>



<div class="form-group mb-3">
    <label for="">licences_number:</label>
    <input type="text" name="licences_number" value="{{ old('licences_number', $car->licences_number) }}" class="form-control @error('licences_number') is-invalid @enderror">
    @error('licences_number')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-3">
    <label for="">End_licences_date:</label>
    <input type="date" name="end_licences_date" value="{{ old('end_licences_date', $car->end_licences_date) }}" class="form-control @error('end_licences_date') is-invalid @enderror">
    @error('end_licences_date')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-3">
    <label for="">Color:</label>
    <input type="string" name="color" value="{{ old('color', $car->color) }}" class="form-control @error('color') is-invalid @enderror">
    @error('color')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-3">

    <label for="">Image:</label>
    <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror">
    @error('image')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-3">
    <label for="">Car_number:</label>
    <input type="text" name="car_number" value="{{old('car_number', $car->car_number) }}" class="form-control @error('car_number') is-invalid @enderror">
    @error('car_number')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-3">
    <label for="">Description:</label>
    <textarea name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description', $car->description) }}</textarea>
    @error('description')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-3">

    <label for="">Status:</label>
    <div>
        <label><input type="radio" name="status" value="Available" @if (old('status', $car->status) == 'Available') checked @endif > Available</label>
        <label><input type="radio" name="status" value="Unavailable" @if (old('status', $car->status) == 'active') checked @endif > Unavailable</label>
    </div>
    @error('status')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror

</div>



<div class="form-group ">
    <button type="submit" class='btn btn-primary'>{{ $button_label ?? 'save'}} </button>
</div>