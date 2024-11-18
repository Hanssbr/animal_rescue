<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});


Auth::routes();

Route::get('/daftar', function(){
    return redirect('/login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// animal list
Route::get('/list', [App\Http\Controllers\AnimalController::class, 'index'])->name('list');

// reporting
Route::get('/report', [App\Http\Controllers\ReportController::class, 'index'])->name('report');
Route::post('/report', [App\Http\Controllers\ReportController::class, 'store'])->name('report.store');

// profile
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user.profile');
Route::get('/user/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
Route::put('/user', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');

// adoption
Route::get('/adopt', [App\Http\Controllers\AdoptionController::class, 'index'])->name('adopt');
Route::get('/adopt/create/{id}', [App\Http\Controllers\AdoptionController::class, 'create'])->name('adopt.create');
Route::post('/adopt/store/{id}', [App\Http\Controllers\AdoptionController::class, 'store'])->name('adopt.store');
