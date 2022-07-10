<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', [UserController::class, 'index'])->name('users.index');
Route::get('/usuarios/cadastrar', [UserController::class, 'create'])->name('users.create');
Route::post('/usuarios/cadastrar', [UserController::class, 'store'])->name('users.store');
Route::get('/usuarios/{id}', [UserController::class, 'show'])->name('users.show');