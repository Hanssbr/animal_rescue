<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::post('logout', [LoginController::class, 'logout'])->name('logout');


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

// report validation
Route::get('/animal/list', [App\Http\Controllers\AnimalController::class, 'index'])->name('animal');




// middleware

Route::middleware(['user'])->group(function () {
    Route::get('/adopt', [App\Http\Controllers\AdoptionController::class, 'index'])->name('adopt');
    Route::get('/adopt/create/{uuid}', [App\Http\Controllers\AdoptionController::class, 'create'])->name('adopt.create');
    Route::post('/adopt/store/{uuid}', [App\Http\Controllers\AdoptionController::class, 'store'])->name('adopt.store');
});

Route::middleware(['admin'])->group(function () {
Route::get('/adminboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/adminboard/report', [App\Http\Controllers\AdminController::class, 'view'])->name('report.view');
Route::get('/adminboard/review', [App\Http\Controllers\AdminController::class, 'review'])->name('animal.review');
Route::get('/adminboard/review/{id}', [App\Http\Controllers\AdminController::class, 'addStatus'])->name('review.addStatus');
Route::get('/adminboard/delete/{id}', [App\Http\Controllers\AdminController::class, 'delete'])->name('report.delete');
});
