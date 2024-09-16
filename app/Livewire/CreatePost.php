<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Create Post')]
class CreatePost extends Component
{
    public $title = 'Post title...';

    public function save() {
        // $post = Post::create([
        //     'title' => $this->title,
        // ]);

        return redirect()->to('/posts')
        ->with('status', 'Post created!');
    }

    public function render()
    {
        return view('livewire.create-post')->with([
            'author' => "Arabambi",
        ]);
    }
}
