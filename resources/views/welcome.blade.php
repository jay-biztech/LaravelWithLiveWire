@extends('layouts.main')

@section('content')
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/" wire:navigate>Livewire Demo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/posts/create" wire:navigate>Create Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/posts" wire:navigate>Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/counter" wire:navigate>Counter</a>
          </li>
      </div>
    </div>
  </nav>

  <p class="position-absolute top-50 start-50 translate-middle">Welcome to Laravel with Livewire</p>
  @livewireScripts
@endsection
