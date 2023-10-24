<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('usuarios')->group(function() {
    Route::get('/', [UsuarioController::class, 'index'])->name('usuarios-index');
    Route::get('/create', [UsuarioController::class, 'create'])->name('usuarios-create');
    Route::post('/', [UsuarioController::class, 'store'])->name('usuarios-store');
    Route::get('/{id}/edit', [UsuarioController::class, 'edit'])->where('id', '[0-9]+')->name('usuarios-edit');
    Route::put('/{id}', [UsuarioController::class, 'update'])->where('id', '[0-9]+')->name('usuarios-update');
    Route::delete('/{id}', [UsuarioController::class, 'destroy'])->where('id', '[0-9]+')->name('usuarios-destroy');

});

Route::fallback(function(){
    return "ERRO!";
});