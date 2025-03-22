<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/homebooking', function () {
    return view('homebooking');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/mybooking', function () {
    return view('mybooking');
});


