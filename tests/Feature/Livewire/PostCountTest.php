<?php

namespace Tests\Feature\Livewire;

use App\Livewire\PostCount;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class PostCountTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(PostCount::class)
            ->assertStatus(200);
    }
}
