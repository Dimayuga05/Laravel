<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/create', function () {
    
    return view('welcome');
})->name('welcome');


Route::post('/store',[HomeController::class, 'store'])->name('users.store');
Route::get('/users',[HomeController::class, 'index'])->name('users.index') ;

Route::get('/users/{id}/edit', [HomeController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [HomeController::class, 'update'])->name('users.update');

Route::delete('/users/{id}/destroy', [HomeController::class, 'destroy'])->name('users.destroy');