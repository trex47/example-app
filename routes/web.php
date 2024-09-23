<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/admin/{name}', function ($name) {
    return "<h1>Admin " . $name . "</h1>";
})->name('admin');

Route::get('/admin', function () {
    return "<h1>Admin</h1>";
})->name('admin');
