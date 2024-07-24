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

Route::get('/', function () {
    return view('home.index');
});

Route::get('/readymade-7000-drop-shipping-suppliers-in-usa-download-link', function () {
    return view('home.readymade-7000-drop-shipping-suppliers-in-usa-download-link');
});

Route::get('/how-to-fix-amazon-seller-error-5665-without-brand-registry', function () {
    return view('home.how-to-fix-amazon-seller-error-5665-without-brand-registry');
});

Route::get('/how-to-launch-your-first-product-on-amazon-in-2021', function () {
    return view('home.how-to-launch-your-first-product-on-amazon-in-2021');
});

Route::get('/access', function () {
    return view('auth.login');
});

Route::get('/booking', function () {
    return view('auth.booking');
});

