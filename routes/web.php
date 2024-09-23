<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [adminController::class,'about'])->name('about');

Route::get('/blog', [adminController::class,'index'])->name('blog');

Route::get('/WriteBlog', [adminController::class,'WriteBlog'])->name('WriteBlog');

Route::post('/InsertBlog', [adminController::class,'InsertBlog'])->name('InsertBlog');

