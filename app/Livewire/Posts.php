<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('All Posts')] 
class Posts extends Component
{
	public $search;
	public $posts;

	public function mount() {
   		$this->posts = Post::get();
	}

	public function updatedSearch($newValue) {
		if (strlen($newValue) > 2) {
			$this->posts = Post::where('title', 'like', "%${newValue}%")->get();
		} else {
			$this->posts = Post::get();
		}
	}

    public function render()
    {
        return view('livewire.posts');
    }
}
