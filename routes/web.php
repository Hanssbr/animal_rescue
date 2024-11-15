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
