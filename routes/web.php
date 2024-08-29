<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::controller(ProductController::class)->group(function (){

    Route::view('/', 'home');
    
    Route::get('/products')->name('products.index');
    
    Route::get('/products/create')->name('products.create');
    
    Route::post('/products/store')->name('products.store');
    
    Route::get('/products/{product}')->name('products.show');
    
    Route::get('/products/{product}/edit')->name('products.edit');
    
    Route::patch('/products/{product}')->name('products.update');
    
    Route::delete('/products/{product}')->name('products.destroy');
    
});