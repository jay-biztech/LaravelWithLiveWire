<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('All Posts')] 
class Posts extends Component
{
	public $search;

	#[Computed] 
	public function posts() {
    	return Post::where('title', 'like', '%' . $this->search .'%')->get();
	}

	public function delete($id) {
        $post = Post::findOrFail($id);
 
        $post->delete();

        session()->flash('message', 'Post deleted successfully!');

        return $this->redirect('/posts', navigate: true);
	}

    public function render()
    {
        return view('livewire.posts');
    }
}
