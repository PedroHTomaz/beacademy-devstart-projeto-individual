<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::delete('/usuarios/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::put('/usuarios/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('usuarios/{id}/editar', [UserController::class, 'edit'])->name('users.edit');
Route::get('/usuarios', [UserController::class, 'index'])->name('users.index');
Route::get('/usuarios/cadastrar', [UserController::class, 'create'])->name('users.create');
Route::post('/usuarios/cadastrar', [UserController::class, 'store'])->name('users.store');
Route::get('/usuarios/entrar', [UserController::class, 'login'])->name('users.login');
Route::get('/usuarios/{id}', [UserController::class, 'show'])->name('users.show');