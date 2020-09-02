<?php

use Illuminate\Support\Facades\Route;
use Rcborinaga\Products\Http\Controllers\ProductController;

$theme = env('FRONTEND_TEMPLATE');
	
Route::prefix("{$theme}/products")->group(function(){

	Route::get('/', [ProductController::class, 'index'])->name('products.index');

	Route::get('/create', [ProductController::class, 'create'])->name('products.create');

	// Route::get('/edit/{$id}', '');

	Route::post('/store', [ProductController::class, 'store'])->name('products.store');

	// Route::patch('/update/{$id}', '');

	// Route::delete('/delete/{$id}', '');

});