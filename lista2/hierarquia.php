<?php

abstract class Telefone {
    protected string $ddd;
    protected string $numero;

    public function __construct(string $ddd, string $numero) {
        $this->ddd = $ddd;
        $this->numero = $numero;
    }


    abstract public function calculaCusto(int $tempo): float;
}


class Fixo extends Telefone {
    private float $custoPorMinuto;

    public function __construct(string $ddd, string $numero, float $custoPorMinuto) {
        parent::__construct($ddd, $numero);
        $this->custoPorMinuto = $custoPorMinuto;
    }


    public function calculaCusto(int $tempo): float {
        return $tempo * $this->custoPorMinuto;
    }
}