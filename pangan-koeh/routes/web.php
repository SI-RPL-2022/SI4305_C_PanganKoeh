<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main.index');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/DaftarVolunteer', function () {
    return view('main.DaftarVolunteer');
});

Route::get('/UbahProfile', function () {
    return view('main.UbahProfile');
});

Route::get('/approval', function () {
    return view('main.approval');
});

Route::get('/DataVolunteer', function () {
    return view('main.DataVolunteer');
});

Route::get('/Profile', function () {
    return view('main.Profile');
});