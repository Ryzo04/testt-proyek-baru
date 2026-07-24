<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index']);

/*
|--------------------------------------------------------------------------
| About
|--------------------------------------------------------------------------
*/

Route::get('/about-us', [AboutController::class, 'index']);

/*
|--------------------------------------------------------------------------
| Products
|--------------------------------------------------------------------------
*/

Route::prefix('category')->group(function () {

    Route::get('/marbel-edu-games', [ProductController::class, 'marbelEduGames']);

    Route::get('/marbel-and-friends-kids-games', [ProductController::class, 'marbelFriends']);

    Route::get('/riri-story-books', [ProductController::class, 'ririStoryBooks']);

    Route::get('/kolak-kids-songs', [ProductController::class, 'kolakKidsSongs']);

});

/*
|--------------------------------------------------------------------------
| News
|--------------------------------------------------------------------------
*/

Route::get('/news', [NewsController::class, 'index']);

Route::get('/news/{slug}', [NewsController::class, 'detail']);

/*
|--------------------------------------------------------------------------
| Program
|--------------------------------------------------------------------------
*/

Route::prefix('program')->group(function () {

    Route::get('/karir', [ProgramController::class, 'karir']);

    Route::get('/magang', [ProgramController::class, 'magang']);

    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjungan']);

});