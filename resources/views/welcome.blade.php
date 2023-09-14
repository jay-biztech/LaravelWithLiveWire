@extends('layouts.main')

@section('content')
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Livewire Demo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="posts">Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="counter">Counter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
      </div>
    </div>
  </nav>

  <p class="position-absolute top-50 start-50 translate-middle">Welcome to Laravel with Livewire</p>

  <p><livewire:counter /></p>

  @livewireScripts
@endsection
