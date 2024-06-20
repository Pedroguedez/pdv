<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'login.index')->name('login.form');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

Route::prefix('usuarios')->group(function () {
    Route::get('/', [UsuarioController::class, 'index'])->name('usuarios-index');
    Route::get('/create', [UsuarioController::class, 'create'])->name('usuarios-create');
    Route::post('/', [UsuarioController::class, 'store'])->name('usuarios-store');
    Route::get('/{id}/edit', [UsuarioController::class, 'edit'])->where('id', '[0-9]+')->name('usuarios-edit');
    Route::put('/{id}', [UsuarioController::class, 'update'])->where('id', '[0-9]+')->name('usuarios-update');
    Route::delete('/{id}', [UsuarioController::class, 'destroy'])->where('id', '[0-9]+')->name('usuarios-destroy');
});
Route::prefix('produtos')->group(function () {
    Route::get('/', [ProdutoController::class, 'index'])->name('produtos-index');
    Route::get('/create', [ProdutoController::class, 'create'])->name('produtos-create');
    Route::post('/', [ProdutoController::class, 'store'])->name('produtos-store');
    Route::get('/{id}/edit', [ProdutoController::class, 'edit'])->name('produtos-edit');
    Route::delete('/{id}', [ProdutoController::class, 'destroy'])->where('id', '[0-9]+')->name('produtos-destroy');
    Route::put('/{id}', [ProdutoController::class, 'update'])->where('id', '[0-9]+')->name('produtos-update');
});

Route::fallback(function () {
    return "Erro ao localizar a rota!";
});
