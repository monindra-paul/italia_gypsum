<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact-us', [ContactController::class, 'contact'])->name('contact');
Route::get('/about-us', [PagesController::class, 'about'])->name('about');
Route::get('/why-gypsum', [PagesController::class, 'whygypsum'])->name('whygypsum');
Route::get('/product', [PagesController::class, 'product'])->name('product');



Route::get('/universal-plaster', [ProductController::class, 'universalPlaster'])->name('product.universalPlaster');
Route::get('/agni-plaster', [ProductController::class, 'agniPlaster'])->name('product.agniPlaster');
Route::get('/aqua-plaster', [ProductController::class, 'aquaPlaster'])->name('product.aquaPlaster');
Route::get('/agni-aqua-plaster', [ProductController::class, 'agniaquaPlaster'])->name('product.agniaquaPlaster');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
