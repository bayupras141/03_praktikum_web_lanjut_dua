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

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(["prefix"=>"/category"], function(){
    Route::get("/marbbel-edu-games", function(){
        return view('product.edu-games');
    });

    Route::get("/marbbel-and-friends-kid-games", function(){
        echo "Marbel kid games";
    });
    Route::get("/riri-story-books", function(){
        echo "Riri story books";
    });
    Route::get("/kolak-kids-songs", function(){
        echo "Kolak story";
    });
});

Route::get("/news", function(){
    return view("news.news");
});

Route::group(["prefix"=>"/program"], function(){
    Route::get("/karir", function(){
        return view("program.program");
    });
    Route::get("/magang", function(){
        echo "Magang";
    });
    Route::get("/kunjungan-industri", function(){
        echo "Kunjungan industri";
    });
});

Route::Get('/about-us', [App\Http\Controllers\AboutController::class, 'about']);
Route::resource('/contact-us', ContactController::class);
