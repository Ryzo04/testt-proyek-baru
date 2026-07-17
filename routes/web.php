<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ('Hi! Selamat datang di website saya');
});

Route::get('/hello', function () { 
return "Hello World"; 
}); 

Route::get('/articles/{id}', function ($id) { 
    return "Artikel dengan ID: " . $id;
});

Route::get('/about', function () { 
return "Nim : 1234567890 <br> Nama: Kelompok 5 <br> Kelompok: hilman, asep,zaki"; 
}); 

Route::get('/hello', [WelcomeController::class, 'hello']); 

Route::get('siswa', function ($id) {
});
Route::post('siswa', function ($id) {
});
Route::put('siswa', function ($id) {
});
Route::delete('siswa', function ($id) {
});
Route::get('siswa/{id}', function ($id) {
});
Route::put('siswa/{id}', function ($id) {
});
Route::delete('siswa/{id}', function ($id) {
});