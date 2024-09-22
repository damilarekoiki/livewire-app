<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    //
    #[Validate('required | min:5')]
    public $title = '';

    #[Validate('required | min:5')]
    public $content;

    public Post $post;

    public function setPost(Post $post) {
        $this->post = $post;
 
        $this->fill(
            $post->only('title', 'content')
        );
    }

    public function store() {
        $this->validate();

        Post::create($this->all());
    }

    public function update() {
        $this->validate();

        $this->post->update([
            'title' => $this->pull('title'),
            'content' => $this->pull('content'),
        ]);

        
    }


}
