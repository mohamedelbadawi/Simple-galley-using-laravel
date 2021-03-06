<?php

use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PhotosController;
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

Route::get('/', [FrontController::class, 'albumsIndex']);
Route::get('/home', [FrontController::class, 'albumsIndex'])->name('home');

Route::get('/gallery', [FrontController::class, 'galleryIndex'])->name('gallery');
Route::post('/contact', [ContactController::class, 'storeContact'])->name('contact.store');

Route::get('/about', function () {
    return view('gallery/about');
})->name('about');

Route::get('/contact', function () {
    return view('gallery/contact');
})->name('contact');
// Route::get('/blog', function () {
//     return view('gallery/blog');
// })->name('blog');

Route::prefix('admin')->group(function () {
    Auth::routes();
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin/dashboard');
        })->name('dashboard');
        Route::get('/albums/create', [AlbumsController::class, 'create'])->name('album.create');
        Route::get('/albums', [AlbumsController::class, 'index'])->name('album.index');
        Route::post('/albums/store', [AlbumsController::class, 'store'])->name('album.store');
        Route::get('album/{id}', [AlbumsController::class, 'showImages'])->name('album.show');
        Route::post('photos/upload/{id}', [PhotosController::class, 'upload'])->name('photos.upload');
        Route::get('/contacts', [ContactController::class, 'Contacts'])->name('contact.index');
        Route::get('delete/photo/{id}', [PhotosController::class, 'deletePhoto'])->name('photo.delete');
        Route::get('delete/album/{album}', [AlbumsController::class, 'deleteAlbum'])->name('album.delete');
    });
});
