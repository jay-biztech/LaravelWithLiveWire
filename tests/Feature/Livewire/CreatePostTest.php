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

    public function test_title_field_has_minimum_validation()
    {
        Livewire::test(CreatePost::class)
            ->call('save')
            ->set('title', '12')
            ->assertHasErrors(['title' => 'min']);
    }

    public function test_description_field_has_minimum_validation()
    {
        Livewire::test(CreatePost::class)
            ->call('save')
            ->set('title', '12')
            ->assertHasErrors(['title' => 'min']);
    }
}
