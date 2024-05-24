<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::controller(\App\Http\Controllers\WebController::class)->group(function () {
    Route::get('/','index')->name('index');
    Route::get('/tarifications','tarification')->name('tarification');
    Route::post('/demo','demo_form')->name('demo_form');
});
