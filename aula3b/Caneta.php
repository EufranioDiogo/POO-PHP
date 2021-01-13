<?php

class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function escrever() {
        if ($this -> tampada == false) {
            echo "<p>Estou escrevendo</p>";
        } else {
            echo "<p>Lapiseira tampada e não pode escrever</p>";
        }
    }

    public function rabiscar() {
        if ($this -> tampada == false) {
            echo "<p>Estou rabiscando</p>";
        } else {
            echo "<p>A lapiseira está tampada não se pode rabiscar</p>";
        }
    }

    public function pintar() {
        if ($this -> tampada == false) {
            echo "<p>Estou pintando</p>";
        } else {
            echo "<p>A lapiseira está tampada não se pode pintar</p>";
        }
    }

    public function tampar() {
        if ($this -> tampada == false) {
           $this -> tampada = true;
           echo "<p>Tampando Caneta</p>";
        } else {
            echo "<p>A Caneta já está tampada</p>";
        }
    }

    public function destampar() {
        if ($this -> tampada == true) {
            $this -> tampada = false;
            echo "<p>Destampando a Caneta</p>";
        } else {
            echo "<p>Caneta já está destampada</p>";
        }
    }
}

?>