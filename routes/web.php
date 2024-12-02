<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\LetterTypeController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teach;
use App\Http\Controllers\TeacherController;

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

Route::get('/', [DashboardController::class, 'index'])->name('home');

Route::prefix('staff')->name('staff.')->group(function () {
    Route::get('/index', [StaffController::class, 'index'])->name('index');
    Route::get('/create', [StaffController::class, 'create'])->name('create');
    Route::post('/store', [StaffController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [StaffController::class, 'edit'])->name('edit');
    Route::patch('/update{id}', [StaffController::class, 'update'])->name('update');
    Route::delete('/delete{id}', [StaffController::class, 'destroy'])->name('destroy');
});

Route::prefix('teacher')->name('teacher.')->group(function () {
    Route::get('/index', [TeacherController::class, 'index'])->name('index');
    Route::get('/create', [TeacherController::class, 'create'])->name('create');
    Route::post('/store', [TeacherController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [TeacherController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [TeacherController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [TeacherController::class, 'destroy'])->name('destroy');
});


Route::prefix('klasifikasi_letter')->name('klasifikasi_letter.')->group(function () {
    Route::get('/index', [LetterTypeController::class, 'index'])->name('index');
    Route::get('/create', [LetterTypeController::class, 'create'])->name('create');
    Route::post('/store', [LetterTypeController::class, 'store'])->name('store');
    Route::get('/show/{id}', [LetterTypeController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [LetterTypeController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [LetterTypeController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [LetterTypeController::class, 'destroy'])->name('destroy');
    Route::get('/export', [LetterTypeController::class, 'export'])->name('export');
    Route::get('/download-pdf/{id}', [LetterTypeController::class, 'downloadPdf'])->name('download-pdf');
});

Route::get('/klasifikasi_letter/test', function () {
    return view('klasifikasi_letter/downloadTest');
});


Route::prefix('letters')->name('letters.')->group(function () {
    Route::get('/index', [LetterController::class, 'index'])->name('index');
    Route::get('/create', [LetterController::class, 'create'])->name('create');
    Route::post('/store', [LetterController::class, 'store'])->name('store');
    Route::get('/show/{id}', [LetterController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [LetterController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [LetterController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [LetterController::class, 'destroy'])->name('destroy');
});