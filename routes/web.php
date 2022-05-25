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
    return view('welcome');
});


Route::get('/header', function () {
    return view('masterlayout.canhsat.header');
})->name("header");


Route::get('/headerQTV', function () {
    return view('masterlayout.quanTriVien.headerQTV');
})->name("headerQTV");

Route::get('/bodyQTV', function () {
    return view('masterlayout.quanTriVien.bodyQTV');
})->name("bodyQTV");