<?php

use App\Livewire\Pages\Home;
use App\Livewire\Pages\ProductDetail;
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

Route::get('/',[Home::class,'render']);
Route::get('/about', function () {
    return view('livewire.pages.about');
});
Route::get('/contact', function () {
    return view('livewire.pages.contact');
});
Route::get('/product-detail/{id}',[ProductDetail::class,'render'])->name('detail');
