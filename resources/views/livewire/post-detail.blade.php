<div class="card mt-3" wire:key="{{ $post->id }}">
  <div class="card-body">
    <h5 class="card-title">{{ $post->title }}</h5>
    <p class="card-text">{{ $post->description }}</p>

    <button class="btn btn-danger" wire:click="delete({{ $post->id }})">Delete</button>
  </div>
</div>