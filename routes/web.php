<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});
Route::get('/kingdom', function () {
    return view('kingdom');
});
Route::get('/king', function () {
    return view('king');
});
Route::get('/', function () {
    return view('welcome');
});