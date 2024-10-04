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

    public function mostrarExercicio4()
    {
        return view('exercicio4');
    }

    public function calcularExercicio4(Request $request)
{
    $numero1 = (float)$request->input("numero1");
    $numero2 = (float)$request->input("numero2");

    if ($numero2 == 0) {
        $resultado = "Divisão por zero não é permitida.";
    } else {
        $resultado = $numero1 / $numero2;
    }

    return view('exercicio4', ['resultado' => $resultado]);
}
    public function mostrarExercicio5()
    {
        return view('exercicio5');
    }

    public function calcularExercicio5(Request $request)
{
    $nota1 = (float)$request->input("nota1");
    $nota2 = (float)$request->input("nota2");
    $nota3 = (float)$request->input("nota3");

    $media = ($nota1 + $nota2 + $nota3) / 3;

    return view('exercicio5', ['media' => $media]);
}






}
