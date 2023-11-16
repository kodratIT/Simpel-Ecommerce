<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('livewire.pages.home');
});
Route::get('/about', function () {
    return view('livewire.pages.about');
});
Route::get('/contact', function () {
    return view('livewire.pages.contact');
});
Route::get('/product-detail/{id}', function () {
    return view('livewire.pages.product-detail');
});
