<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController; 
use App\Http\Controllers\FactoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Address_shippingController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Order_lineController;
use App\Http\Controllers\Factory_articleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('customers', CustomerController::class);
    Route::resource('factories', FactoryController::class);
Route::resource('articles', ArticleController::class);
Route::resource('address_shippings', Address_shippingController::class);
Route::resource('orders', OrderController::class);
Route::resource('order_lines', Order_lineController::class);
Route::resource('factory_articles', Factory_articleController::class);

});

require __DIR__.'/auth.php';
