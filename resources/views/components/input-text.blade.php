@props(['name'])
 
<input type="text" class="form-control" name="{{ $name }}" {{ $attributes }}>
 
<div>
    @error($name) <span class="error text-danger">{{ $message }}</span> @enderror
</div>