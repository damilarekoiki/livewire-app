<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Title('Update Post')]
class UpdatePost extends Component
{
    public Post $post;

    public PostForm $form;

    #[Validate('required')]
    public $tags;

    public function mount(Post $post) {
        $this->post = $post;
        $this->tags = $post->tags;

        $this->form->setPost($post);

    }

    public function update() {
        $this->form->update();

        session()->flash('message', 'Post updated successfully!');
    }

    // updated hook to handle real-time saving for form field
    public function updated($name, $value) {
        $this->post->update([
            $name => $value,
        ]);

        session()->flash('message', 'Post tags updated successfully!');
    }

    public function render()
    {
        return view('livewire.update-post');
    }
}
