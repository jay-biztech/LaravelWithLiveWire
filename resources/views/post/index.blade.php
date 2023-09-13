@extends('layouts.app')

@section('content')
	<h1><center>All Posts</center></h1>

	 @foreach ($posts as $post)
		<div class="card">
		  <div class="card-body">
		    <h5 class="card-title">{{ $post->title }}</h5>
		    <p class="card-text">{{ $post->description }}</p>
		  </div>
		</div>
	@endforeach
@endsection