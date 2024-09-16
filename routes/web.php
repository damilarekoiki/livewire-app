<?php

use App\Livewire\CreatePost;
use App\Livewire\PostItems;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', PostItems::class);

Route::get('/create-post', CreatePost::class);
