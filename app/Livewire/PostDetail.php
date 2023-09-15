<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostDetail extends Component
{
	public $post;

	public function mount($id) {
		$this->post = Post::find($id);
	}

    public function render()
    {
        return view('livewire.post-detail', ['post' => $this->post]);
    }
}
