<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    public ?Post $post = null;

    // Real time validation
    #[Validate]
    public $title = '';

    // Validates only when the form is submitted
    public $content;

    public function rules() {
        return [
            'title' => [
                'required',
                Rule::unique('posts')->ignore($this->post?->id),
            ],
            'content' => 'required | min:5',
        ];
    }

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
