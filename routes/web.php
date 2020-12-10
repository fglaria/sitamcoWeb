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

//Route::redirect('/', '/somos');

Route::get('/', function () {
    return view('home');
});

Route::get('/somos', function () {
    return view('somos');
});

Route::get('/beneficios', function () {
    return view('beneficios');
});

Route::get('/unete', function () {
    return view('unete');
});

Route::get('/contacto', function () {
    return view('contacto');
});
