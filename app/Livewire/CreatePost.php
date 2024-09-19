<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Title('Create Post')]
class CreatePost extends Component
{
    #[Validate('required')]
    public $title;

    #[Validate('required')]
    public $content;

    public function save() {
        $this->validate();
        $post = Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

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
