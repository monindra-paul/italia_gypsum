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
Route::get('/resources', [PagesController::class, 'resources'])->name('resources');
Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');




Route::get('/plaster', [ProductController::class, 'plaster'])->name('plaster');
Route::get('/regular-plaster-board', [ProductController::class, 'universalPlaster'])->name('product.universalPlaster');
Route::get('/fire-plaster-board', [ProductController::class, 'agniPlaster'])->name('product.agniPlaster');
Route::get('/moisture-plaster-board', [ProductController::class, 'aquaPlaster'])->name('product.aquaPlaster');
Route::get('/fire-moisture-plaster-board', [ProductController::class, 'agniaquaPlaster'])->name('product.agniaquaPlaster');
Route::get('/glass-mat', [ProductController::class, 'glassMat'])->name('product.glassmat');
Route::get('/ceiling-tiles', [ProductController::class, 'ct'])->name('product.ct');

Route::get('/jointing-compound', [ProductController::class, 'jointingComp'])->name('product.jointComp');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
