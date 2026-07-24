<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;


Route::get('/', [HomeController::class, 'index']);

Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', [ProductController::class, 'marbelEduGames']);
    Route::get('/marbel-and-friends-kids-games', [ProductController::class, 'marbelFriends']);
    Route::get('/riri-story-books', [ProductController::class, 'ririStoryBooks']);
    Route::get('/kolak-kids-songs', [ProductController::class, 'kolakKidsSongs']);
});

Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{slug}', [NewsController::class, 'detail']);

Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjungan']);
});

Route::get('/about-us' , [AboutController::class, 'index']);