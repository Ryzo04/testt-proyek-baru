<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/articles/{id}', [PageController::class, 'articles']);
 
