<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Home');
});

Route::get('/login', function () {
    return inertia('Login');
});

Route::get('/daftar', function () {
    return inertia('Daftar');
});

Route::get('/dashboard', function () {
    return inertia('Dashboard');
});