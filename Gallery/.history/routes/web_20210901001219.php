<?php

use App\Http\Controllers\AlbumsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('gallery/index');
});

Route::get('/home', function () {
    return view('gallery/index');
});

Route::get('/index', function () {
    return view('gallery/index');
})->name('index');

Route::get('/gallery', function () {
    return view('gallery/gallery');
})->name('gallery');

Route::get('/about', function () {
    return view('gallery/about');
})->name('about');

Route::get('/contact', function () {
    return view('gallery/contact');
})->name('contact');
Route::get('/blog', function () {
    return view('gallery/blog');
})->name('blog');

Route::prefix('admin')->group(function () {
    Auth::routes();
    Route::get('/dashboard', function () {
        return view('admin/dashboard');
    });
    Route::get('/albums/create',[AlbumsController::class,'create'])->name('album.create');
    Route::post('/albums/store',[AlbumsController::class,'store'] )->name('album.store');


});
Route::get('/admin', function () {
    return view('admin.Dashboard');
})->middleware('auth');
