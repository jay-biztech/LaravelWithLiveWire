<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Posts;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class PostsTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Posts::class)
            ->assertStatus(200);
    }

    public function test_main_page_contains_post_form_livewire_component()
    {
        $this->get('/posts')
            ->assertSeeLivewire('create-post');
    }
}
