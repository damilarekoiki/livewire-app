<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreatePost;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class CreatePostTest extends TestCase
{
    use RefreshDatabase;
    public function test_renders_successfully(): void
    {
        // Livewire::test(CreatePost::class)
        //     ->assertStatus(200);

        $this->get('/posts/create')
        ->assertSeeLivewire(CreatePost::class);
    }

    public function test_can_set_title() {
        Livewire::test(CreatePost::class)
        ->set('form.title', 'Hello World')
        ->assertSet('form.title', 'Hello World');
    }

    public function test_can_create_post() {
        $this->assertEquals(0, Post::count());

        Livewire::test(CreatePost::class)
        ->set('form.title', 'Hello World')
        ->set('form.content', 'Hello World')
        ->call('save');

        $this->assertEquals(1, Post::count());

    }

    public function test_title_field_is_required() {
        Livewire::test(CreatePost::class)
        ->set('form.title', '')
        ->call('save')
        ->assertHasErrors('form.title');
    }

    public function test_redirect_to_all_posts_after_post_is_created() {
        Livewire::test(CreatePost::class)
        ->set('form.title', 'Hello World')
        ->set('form.content', 'Hello World')
        ->call('save')
        ->assertRedirect('/posts');
    }


}
