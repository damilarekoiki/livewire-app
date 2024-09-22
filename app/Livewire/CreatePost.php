<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Create Post')]
class CreatePost extends Component
{
    public PostForm $form;

    public function save() {
        $this->form->store();

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
