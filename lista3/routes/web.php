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

Route::get("/exercicio4", [ListaController::class, "mostrarExercicio4"]);
Route::post("/exercicio4/resposta", [ListaController::class, "calcularExercicio4"]);

Route::get("/exercicio5", [ListaController::class, "mostrarExercicio5"]);
Route::post("/exercicio5/resposta", [ListaController::class, "calcularExercicio5"]);

Route::get("/exercicio6", [ListaController::class, "mostrarExercicio6"]);
Route::post("/exercicio6/resposta", [ListaController::class, "calcularExercicio6"]);

Route::get("/exercicio7", [ListaController::class, "mostrarExercicio7"]);
Route::post("/exercicio7/resposta", [ListaController::class, "calcularExercicio7"]);

Route::get("/exercicio8", [ListaController::class, "mostrarExercicio8"]);
Route::post("/exercicio8/resposta", [ListaController::class, "calcularExercicio8"]);

Route::get("/exercicio9", [ListaController::class, "mostrarExercicio9"]);
Route::post("/exercicio9/resposta", [ListaController::class, "calcularExercicio9"]);

Route::get("/exercicio10", [ListaController::class, "mostrarExercicio10"]);
Route::post("/exercicio10/resposta", [ListaController::class, "calcularExercicio10"]);

Route::get("/exercicio11", [ListaController::class, "mostrarExercicio11"]);
Route::post("/exercicio11/resposta", [ListaController::class, "calcularExercicio11"]);

Route::get("/exercicio12", [ListaController::class, "mostrarExercicio12"]);
Route::post("/exercicio12/resposta", [ListaController::class, "calcularExercicio12"]);
