<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreatePost;
use Livewire\Livewire;
use Tests\TestCase;

class CreatePostTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreatePost::class)
            ->assertStatus(200);
    }

    public function test_post_saved_successfully()
    {
        Livewire::test(CreatePost::class)
            ->set('title', 'PHP')
            ->set('description', 'Lorem ipsum...')
            ->call('save')
            ->assertStatus(200);
    }

    public function test_post_field_is_required()
    {
        Livewire::test(CreatePost::class)
            ->call('save')
            ->assertHasErrors(['title' => 'required', 'description' => 'required']);
    }
}
