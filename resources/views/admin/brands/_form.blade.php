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
    <input type="text" name="name" value="{{ old('name', $brand->name) }}" class="form-control @error('name') is-invalid @enderror">
    @error('name')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>



<div class="form-group mb-3">
    <label for="">Image:</label>
    <div class="mb-2">
        <img src="{{ $brand->image_url }}" height="200" alt="">
    </div>   
    <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror">
    
    @error('image')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>


    <label for="">Status:</label>
    <div>
        <label><input type="radio" name="status" value="active" @if (old('status', $brand->status) == 'active') checked @endif > active</label>
        <label><input type="radio" name="status" value="inactive" @if (old('status', $brand->status) == 'inactive') checked @endif > inactive</label>
    </div>
    @error('status')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror

</div>



<div class="form-group ">
    <button type="submit" class='btn btn-primary'>{{ $button_label ?? 'save'}} </button>
</div>