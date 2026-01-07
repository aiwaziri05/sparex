<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\Api\NewsletterController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio/{slug}', [App\Http\Controllers\PortfolioController::class, 'show'])->name('portfolio.show');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

// Newsletter subscription landing page
Route::get('/newsletter', function () {
    return view('newsletter.subscription');
})->name('newsletter');

// Fallback route for API-style subscription endpoint if routes/api.php is not loaded
// Route::post('/api/subscribe', [NewsletterController::class, 'subscribe'])
//     ->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);
