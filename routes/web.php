<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::controller(RoutePages::class)->group(function (){
    Route::get('/', 'phoenixsheater');
    Route::get('/company', 'company');
    Route::get('/ecological', 'ecological');
    Route::get('/calculate', 'calculate');
    Route::get('/advice', 'advice');
    Route::get('/buypage', 'buypage');
    Route::get('/buypage/{id}','bpage')->name('buy');
    Route::get('/shoppingcart', 'shoppingcart');
    Route::get('/faq', 'faq');
    Route::get('/test','test');
    Route::get('/test1/{id}', 'test1');
});
Route::controller(CustomerReact::class)->group(function(){
    Route::post('/hamtrah','hamtrah');
    Route::post('/sanal','sanal');
});