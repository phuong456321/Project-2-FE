<?php

use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home'); // Hoặc trả về view trang chủ của bạn
})->name('home');

Route::get('/premium', function () {
    return view('premium'); // Nếu file view là home.blade.php
});

Route::get('/albums', function () {
    return view('albums'); // Trang album
});
Route::get('/profile', function () {
    return view('profile'); // Trang profile
});
Route::get('/library', function () {
    return view('library'); 
});
Route::get('/discover', function () {
    return view('discover');
})->name('discover');
