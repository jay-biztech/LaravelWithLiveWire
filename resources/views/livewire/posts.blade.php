<div>
	<h1><center>All Posts</center></h1>

	<livewire:create-post />

	<div class="mt-4">
		<div class="input-group">
		    <input wire:model.live="search" type="search" class="form-control ds-input" id="search-input" placeholder="Search..." 
		        aria-label="Search for..." autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="list" 
		        aria-expanded="false" aria-owns="algolia-autocomplete-listbox-0" dir="auto" 
		        style="position: relative; vertical-align: top;"
		    >
		</div>

		@foreach ($this->posts as $post)
			<div class="card mt-3" wire:key="{{ $post->id }}">
			  <div class="card-body">
			    <h5 class="card-title">{{ $post->title }}</h5>
			    <p class="card-text">{{ $post->description }}</p>

			    <button class="btn btn-danger" wire:click="delete({{ $post->id }})">Delete</button>
			  </div>
			</div>
		@endforeach
	</div>
</div>