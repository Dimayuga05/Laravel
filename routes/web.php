<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessoController;

Route::get('/create',[HomeController::class, 'create'])->name('welcome');
Route::post('/store',[HomeController::class, 'store'])->name('users.store');
Route::get('/users',[HomeController::class, 'index'])->name('users.index') ;

Route::get('/users/{id}/edit', [HomeController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [HomeController::class, 'update'])->name('users.update');

Route::delete('/users/{id}/destroy', [HomeController::class, 'destroy'])->name('users.destroy');

Route::get('/sesso',[SessoController::class, 'index'])->name('sesso.index') ;
Route::get('/sesso/create',[SessoController::class, 'create'])->name('sesso.create') ;
Route::post('/sesso/store',[SessoController::class, 'store'])->name('sesso.store') ;
Route::get('/sesso/{id}',[SessoController::class, 'show'])->name('sesso.show') ;
Route::get('/sesso/{id}/edit',[SessoController::class, 'edit'])->name('sesso.edit') ;
Route::put('/sesso/{id}',[SessoController::class, 'update'])->name('sesso.update') ;
Route::delete('/sesso/{id}/destroy',[SessoController::class, 'destroy'])->name('sesso.destroy') ;
