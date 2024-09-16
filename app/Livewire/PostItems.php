<?php

namespace App\Livewire;

use Livewire\Component;

class PostItems extends Component
{
    public $posts = [
        [
            'id' => 1,
            'title' => 'First post',
            'author' => 'Adenyemi',
        ],
        [
            'id' => 2,
            'title' => 'Second post',
            'author' => 'Olukayode',
        ]
    ];
    public function render()
    {
        return view('livewire.post-items');
    }
}
