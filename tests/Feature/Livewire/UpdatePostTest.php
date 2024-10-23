<?php

namespace Tests\Feature\Livewire;

use App\Livewire\UpdatePost;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class UpdatePostTest extends TestCase
{
    // use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_title_field_is_populated(): void
    {
        $post = Post::factory()->make(['title' => 'Top ten bath bombs']);

        Livewire::test(UpdatePost::class, ['post' => $post])
        ->assertSet('form.title', 'Top ten bath bombs');
    }
}
