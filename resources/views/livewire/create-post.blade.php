<form wire:submit="save"> 
	<div class="form-group">
		<label for="title">Title</label>
		<input type="title" class="form-control" placeholder="Enter title" wire:model.live="title">
		<div class="text-danger">@error('title') {{ $message }} @enderror</div>
	</div>

	<div class="form-group">
		<label for="description">Title</label>
		<input type="description" class="form-control" placeholder="Enter description" wire:model.live="description">
		<div class="text-danger">@error('description') {{ $message }} @enderror</div>
	</div>	
 
    <button type="submit" class="btn btn-primary">Save</button>
</form>