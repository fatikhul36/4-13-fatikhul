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

Route::get('/about', function () {
    return view('about' , [
        "title" => "about",
        "nama" => "fatikhul rafi musaffa",
        "email" => "fatihmusyafa72@gmail.com",
        "gambar" => "images/profile.jpg"
    ]);
});

Route::get('/', function () {
    return view('index', [
        "title" => "beranda"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery', [
        "title" => "gallery"
    ]);
});


Route::resource('/contacts',ContactController::class);
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');
Auth::routes();

Route::group(['middleware' => ['auth']], Function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
    Route::post('/contacts/{id}/update', [ContactController:: class,'update'])->name('contacts.update');
    Route::get('/contacts/{id}/destroy', [ContactController:: class,'destroy'])->name('contacts.destroy');
});
    
