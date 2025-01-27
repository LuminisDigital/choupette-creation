<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/realisations', function () {
    return view('realisations');
})->name('realisations');

Route::get('/a-propos', function () {
    return view('about');
})->name('about');

Route::get('/price', function () {
    return view('price');
})->name('price');

Route::get('/boutique', [ProductController::class, 'index'])->name('shop.index');
Route::get('/boutique/{slug}', [ProductController::class, 'show'])->name('shop.show');
