<?php

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

Route::controller(\App\Http\Controllers\WebController::class)->group(function () {
    Route::get('/','index')->name('index');
    Route::get('/tarifications','tarification')->name('tarification');
    Route::get('/modules','modules')->name('modules');
    Route::get('/apropos','apropos')->name('apropos');
    Route::post('/demo','demo_form')->name('demo_form');
});
