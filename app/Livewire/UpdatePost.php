<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Update Post')]
class UpdatePost extends Component
{
    public Post $post;

    public PostForm $form;

    public function mount(Post $post) {
        $this->form->setPost($post);
    }

    public function update() {
        $this->form->update();

        session()->flash('message', 'Post updated successfully!');
    }

    public function render()
    {
        return view('livewire.update-post');
    }
}
