<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exer1', [ListaController::class, 'mostrarExer1']);
Route::post('/respostaexer1', [ListaController::class, 'calcularExer1']);

Route::get('/exer2', [ListaController::class, 'mostrarEx02']);
Route::post('/respostaexer2', [ListaController::class, 'calcularEx02']);

Route::get("/exercicio3", [ListaController::class, "mostrarExercicio3"]);
Route::post("/exercicio3/resposta", [ListaController::class, "calcularExercicio3"]);

