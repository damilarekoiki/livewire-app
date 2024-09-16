<?php

use App\Livewire\CreatePost;
use App\Livewire\PostItems;
use App\Livewire\UpdatePost;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/posts', PostItems::class);

Route::group(['prefix' => 'posts'], function () {
    Route::get('/create', CreatePost::class);
    Route::get('/edit/{post}', UpdatePost::class)->name('posts.edit');
    Route::get('/', PostItems::class);
});
