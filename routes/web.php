<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;


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

Route::get('/', [PublicController::class,'home'])->name('home');

Route::get('/products', [ProductController::class,'index'])->name('products');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/contactUs', [PublicController::class,'contactUs'])->name('contactUs');
Route::post('/contactSubmit', [PublicController::class, 'contactSubmit'])->name('contactSubmit');