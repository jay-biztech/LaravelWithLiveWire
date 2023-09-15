<?php

namespace Tests\Feature\Livewire;

use App\Livewire\PostDetail;
use App\Livewire\CreatePost;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class PostDetailTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function post_detail_page_contains_livewire_component()
    {
        Livewire::test(CreatePost::class)
            ->set('title', 'PHP')
            ->set('description', 'Lorem ipsum...')
            ->call('save')
            ->assertStatus(200);

        $this->get('/posts/1')->assertSeeLivewire(PostDetail::class);
    }

    public function test_post_has_title()
    {
        Livewire::test(CreatePost::class)
            ->set('title', 'PHP')
            ->set('description', 'Lorem ipsum...')
            ->call('save')
            ->assertStatus(200);

        Livewire::test(PostDetail::class, ['id' => '2'])
            ->assertSeeText('PHP');
    }
}
