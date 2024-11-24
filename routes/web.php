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
    return view('dashboard');
});

Route::get('/staff/index', function () {
    return view('staff/index');
});
Route::get('/staff/create', function () {
    return view('/staff/create');
});
Route::get('/staff/edit', function () {
    return view('/staff/edit');
});


Route::get('/teacher/index', function () {
    return view('teacher/index');
});
Route::get('/teacher/create', function () {
    return view('/teacher/create');
});
Route::get('/teacher/edit', function () {
    return view('/teacher/edit');
});


Route::get('/klasifikasi_letter/index', function () {
    return view('klasifikasi_letter/index');
});
Route::get('/klasifikasi_letter/create', function () {
    return view('/klasifikasi_letter/create');
});
Route::get('/klasifikasi_letter/edit', function () {
    return view('/klasifikasi_letter/edit');
});


Route::get('/letter/index', function () {
    return view('letter/index');
});
Route::get('/letter/create', function () {
    return view('/letter/create');
});
Route::get('/letter/edit', function () {
    return view('/letter/edit');
});