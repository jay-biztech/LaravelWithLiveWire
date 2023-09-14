<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
    	<div class="container">
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

        	{{ $slot }}
        </div>
    </body>
</html>
