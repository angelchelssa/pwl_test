<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Selamat Datang');
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-
 : " . $commentId;
});

Route::get('/articles/{id}/', function ($id) {
    return 'Halaman Artikel dengan id ' . $id;
});

Route::get('/user/{name?}', function ($name = 'john') {
    return 'Nama saya ' . $name;
});

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/articles', [PageController::class, 'articles']);

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index',
    'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create',
    'store',
    'update',
    'destroy'
]);



Route::get('/greeting', [WelcomeController::class, 'greeting']);

