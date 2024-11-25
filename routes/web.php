<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::prefix('user')->group(function(){
    Route::prefix('teacher')->name('teacher.')->group(function(){
        Route::get('/index', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::get('/edit', [UserController::class, 'edit'])->name('edit');
        Route::post('/update', [UserController::class, 'update'])->name('update');
    });
// });


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