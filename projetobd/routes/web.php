<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoriaController; 
use App\Http\Controllers\FuncionarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rota de categorias
    Route::resource('categoria', CategoriaController::class);

    // Rotas do funcionário
    Route::resource('funcionarios', FuncionarioController::class);
});

require __DIR__.'/auth.php';
