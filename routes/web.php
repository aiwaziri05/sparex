<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'index'])->name('portfolio');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
