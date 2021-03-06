<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
};

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('home');
});

Route::get('/usuarios', [UserController::class, 'index'])->name('users.index');
Route::post('/usuarios/cadastrar', [UserController::class, 'store'])->name('users.store');

Route::middleware(['auth'])->group(function () {
    Route::delete('/usuarios/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::put('/usuarios/{id}', [UserController::class, 'update'])->name('users.update');
    Route::get('/usuarios/{id}/editar', [UserController::class, 'edit'])->name('users.edit');
    Route::get('/usuarios/{id}', [UserController::class, 'show'])->name('users.show');
});
