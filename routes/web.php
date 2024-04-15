<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('form_mhs');
})->name('login');

Route::get('/lihat-data',[SiteController::class,'view_data']);
Route::post('/auth','App\Http\Controllers\SiteController@autentikasi');
Route::get('/logout','App\Http\Controllers\SiteController@logout');
Route::resource('product', ProductController::class)->middleware('auth');
