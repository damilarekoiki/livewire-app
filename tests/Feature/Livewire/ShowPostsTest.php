<?php

namespace Tests\Feature\Livewire;

use App\Livewire\PostItems;
use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ShowPostsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_displays_posts(): void
    {
        User::factory()->create();
        Post::factory()->create(['title' => "On bathing well"]);
        Post::factory()->create(['title' => "There's no time like bathtimel"]);

        Livewire::test(PostItems::class)
            ->assertSee('On bathing well')
            ->assertSee("There's no time like bathtimel");
    }

    public function test_display_all_posts(): void {
        User::factory()->create();
        Post::factory()->create(['title' => 'On bathing well']);
        Post::factory()->create(['title' => 'The bathtub is my sanctuary']);
 
        Livewire::test(PostItems::class)
            ->assertViewHas('posts', function ($posts) {
                return count($posts) == 2;
            });
    }
}
