<?php

require __DIR__.'/auth.php';

use App\Http\Controllers\EmpresasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\FuncionariosController;

Route::resource('empresas', EmpresaController::class);
Route::resource('funcionarios',FuncionariosController::class);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');