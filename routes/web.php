<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::controller(ProductController::class)
    ->prefix('products')
    ->name('products.')
    ->group(function (){

    Route::view('/', 'home');
    
    Route::get('/products')->name('index');
    
    Route::get('/create')->name('create');
    
    Route::post('/store')->name('store');
    
    Route::get('/{product}')->name('show');
    
    Route::get('/{product}/edit')->name('edit');
    
    Route::patch('/{product}')->name('update');
    
    Route::delete('/{product}')->name('destroy');
    
});