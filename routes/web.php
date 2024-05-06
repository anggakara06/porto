<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', Controllers\HomeController::class);
Route::get('/about', Controllers\AboutController::class);
Route::get('/contact', [Controllers\ContactController::class, 'index']);
Route::get('/gallery', [Controllers\GalleryController::class, 'index']);
Route::get('/users', [Controllers\UserController::class, 'index']);

Route::get('/users/create', [Controllers\UserController::class, 'create']);
Route::post('/users', [Controllers\UserController::class, 'store']);

Route::get('articles/create', function (){
    \App\Models\Article::create([
        'title' => $title = 'My Second Article',
        'slug' => str($title)->slug(),
        'body' => $body = 'This is Body Article',
        'teaser' => $teaser = str($body)-> limit(160),
        'meta_title' => $title,
        'meta_description' => $teaser,
    ]);
});
