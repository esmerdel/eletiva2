<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaController extends Controller
{
    public function mostrarExer1(){
        return view("exer1");
    }

    public function calcularExer1(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1+$valor2;
    }
    public function mostrarEx02()
    {
        return view("exer2");
    }
    public function calcularEx02(Request $request)
    {
        $valor1 = (int)$request->input('val01');
        $valor2 = (int)$request->input('val02');
        return $valor1 - $valor2;
    }
    
    public function mostrarExercicio3()
    {
        return view('exercicio3');
    }
    public function calcularExercicio3(Request $request)
{
    $valor1 = (int)$request->input("valor1");
    $valor2 = (int)$request->input("valor2");

    $resultado = $valor1 * $valor2;

    return view('exercicio3', ['resultado' => $resultado]);
}





}
