<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NewsletterController;

Route::middleware('api')->group(function () {
    Route::post('/subscribe', [NewsletterController::class, 'subscribe']);
});


