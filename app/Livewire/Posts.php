<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Pagination\Paginator;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;


#[Title('All Posts')] 
class Posts extends Component
{
    use WithPagination;

    #[Url] 
	public $search;

	#[Computed] 
	public function posts() {
    	return Post::where('title', 'like', '%' . $this->search .'%')->latest()->paginate(10);
	}

	public function delete($id) {
        $post = Post::findOrFail($id)->delete();

        session()->flash('message', 'Post deleted successfully!');
	}

    public function render()
    {

        return view('livewire.posts');
    }
}
