<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Update Post')]
class UpdatePost extends Component
{
    public Post $post;
    public $title;
    public $content;

    public function mount(Post $post) {
        $this->post = $post;

        $this->fill(
            $post->only('title', 'content')
        );
    }

    public function update() {
        $this->post->update([
            'title' => $this->pull('title'),
            'content' => $this->pull('content'),
        ]);

        session()->flash('message', 'Post updated successfully!');
    }

    public function render()
    {
        return view('livewire.update-post');
    }
}
