<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('master.layouts');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(["prefix"=>"/category"], function(){
    Route::get("/marbbel-edu-games", [App\Http\Controllers\ProdukController::class, 'edu_games']);
    Route::get("/marbbel-and-friends-kid-games", [App\Http\Controllers\ProdukController::class, 'kids_games']);
    Route::get("/riri-story-books", [App\Http\Controllers\ProdukController::class, 'story_books']);
    Route::get("/kolak-kids-songs", [App\Http\Controllers\ProdukController::class, 'kids_songs']);
});

Route::get("/news", function(){
    return view("news.news");
});

Route::group(["prefix"=>"/program"], function(){
    Route::get("/karir", [App\Http\Controllers\ProgramController::class, 'karir']);
    Route::get("/magang",  [App\Http\Controllers\ProgramController::class, 'magang']);
    Route::get("/kunjungan-industri",  [App\Http\Controllers\ProgramController::class, 'kunjungan_industri']);
});

Route::Get('/about-us', [App\Http\Controllers\AboutController::class, 'about']);
Route::resource('/contact-us', ContactController::class);
