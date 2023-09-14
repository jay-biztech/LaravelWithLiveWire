<form wire:submit="save"> 
	<div class="form-group">
		<label for="title">Title</label>
		<input type="title" class="form-control" placeholder="Enter title" wire:model="title">
	</div>

	<div class="form-group">
		<label for="description">Title</label>
		<input type="description" class="form-control" placeholder="Enter description" wire:model="description">
	</div>	
 
    <button type="submit" class="btn btn-primary">Save</button>
</form>