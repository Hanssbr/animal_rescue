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
Route::get('/list', [App\Http\Controllers\AnimalController::class, 'index'])->name('list');
Route::get('/report', [App\Http\Controllers\ReportController::class, 'index'])->name('report');
Route::post('/report', [App\Http\Controllers\ReportController::class, 'store'])->name('report.store');
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user.profile');
Route::get('/user/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
Route::put('/user', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
