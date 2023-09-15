<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostCount extends Component
{
    public function render()
    {
        return view('livewire.post-count', [
        	'count' => Post::count(),
        ]);
    }
}
