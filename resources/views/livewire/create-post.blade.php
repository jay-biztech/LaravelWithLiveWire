<form wire:submit="save"> 
	<div class="form-group">
		<label for="title">Title</label>
		<x-input-text name="title" wire:model.live="title" /> 
	</div>

	<div class="form-group">
		<label for="description">Description</label>
		<x-input-text name="description" wire:model.live="description" /> 
	</div>	
 
    <button type="submit" class="btn btn-primary" wire:loading.class="opacity-50" wire:loading.attr="disabled">Save</button>
</form>