<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/registration-success', function () {
    return view('success');
})->name('registration.success');
