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

	public function delete($id) {
        $post = Post::findOrFail($id);
 
        $post->delete();

        session()->flash('message', 'Post deleted successfully!');

        return $this->redirect('/posts', navigate: true);
	}

    public function render()
    {
    	$this->posts = Post::where('title', 'like', '%' . $this->search .'%')->get();

        return view('livewire.posts', ['posts' => $this->posts]);
    }
}
