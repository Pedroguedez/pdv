<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;
use App\Usuario;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::prefix('usuarios')->group(function () {
    Route::get('/', [UsuarioController::class, 'index'])->name('usuarios-index');
    Route::get('/create', [UsuarioController::class, 'create'])->name('usuarios-create');
    Route::post('/', [UsuarioController::class, 'store'])->name('usuarios-store');
    Route::get('/{id}/edit', [UsuarioController::class, 'edit'])->where('id', '[0-9]+')->name('usuarios-edit');
    Route::put('/{id}', [UsuarioController::class, 'update'])->where('id', '[0-9]+')->name('usuarios-update');
    Route::delete('/{id}', [UsuarioController::class, 'destroy'])->where('id', '[0-9]+')->name('usuarios-destroy');
});
Route::view('/login', 'login.index')->name('login.form');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');

Route::fallback(function () {
    return "Erro ao localizar a rota!";
});
