<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class CreatePost extends Component
{
	public $title;
	public $description;
 
    public function save() 
    {
        $post = Post::create([
            'title' => $this->title,
            'description' => $this->description
        ]);

        return $this->redirect('/posts', navigate: true);
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
