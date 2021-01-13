<?php

class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar() {
        if ($this -> tampada == false) {
            echo "<p>Estou rabiscando</p>";
        } else {
            echo "<p>A lapiseira está tampada não se pode rabiscar</p>";
        }
    }

    function tampar() {
        if ($this -> tampada == false) {
            $this -> tampada = true;
        }
    }

    function destampar() {
        if ($this -> tampada == true) {
            $this -> tampada = false;
        }
    }
}

?>