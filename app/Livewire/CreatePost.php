<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreatePost extends Component
{
    #[Rule('required|min:3')]
    public $title;

    #[Rule('required|min:10')]
    public $description;

 
    public function save() 
    {
        $this->validate();

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
