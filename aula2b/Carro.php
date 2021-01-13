<?php

class Carro {
    var $marca;
    var $modelo;
    var $cor;
    var $velocidadeMaxima;
    var $velocidade = 0;
    var $limiteMaximoDeCombustivel;
    var $electrico;
    var $ligado = false;

    function __construct($marca, $modelo, $cor, $velocidadeMaxima, $limiteMaximoDeCombustivel, $electrico) {
        $this -> marca = $marca;
        $this -> modelo = $modelo;
        $this -> cor = $cor;
        $this -> velocidadeMaxima = $velocidadeMaxima;
        $this -> limiteMaximoDeCombustivel = $limiteMaximoDeCombustivel;
        $this -> electrico = $electrico;
    }

    function ligarCarro() {
        echo "<br>-------------------------------------";
        if ($this -> ligado == false) {
            $this -> ligado = true;
            echo "<p>Ligando o carro...<br>Carro Ligado.</p>";
        } else {
            echo "<p>Carro actualmente ligado</p>";
        }
        echo "<br>-------------------------------------";
    }

    function desligarCarro() {
        echo "<br>-------------------------------------";
        if ($this -> ligado == true) {
            $this -> ligado = false;
            echo "<p>Desligando o carro...<br>Carro desligado.</p>";
            if ($this -> velocidade > 0) {
                echo "<p>Diminuindo a velocidade do carro até parar.</p>";
                while ($this -> velocidade > 0) {
                    $this -> velocidade -= 20;
                    $this -> velocidadeActual();
                }
            }
        } else {
            echo "<p>Carro actualmente desligado</p>";
        }
        echo "<br>-------------------------------------";
    }

    function velocidadeActual() {
        echo "<p>Velocidade actual: " . $this -> velocidade . " KM/H";
        return $this -> velocidade;
    }

    function acelerar() {
        echo "<br>-------------------------------------";
        if ($this -> velocidade + 20 <= $this -> velocidadeMaxima && $this -> ligado) {
            $this -> velocidade += 20;
            echo "<p>Velocidade aumentada</p>";
        } else {
            echo "<p>Você atingiu a velocidade máxima</p>";
        }
        $this -> velocidadeActual();
        echo "<br>-------------------------------------";
    }

    function desacelerar() {
        echo "<br>-------------------------------------";
        if ($this -> velocidade - 20 >= 0 && $this -> ligado) {
            $this -> velocidade -= 20;
            echo "<p>Velocidade Diminuida</p>";
        } else {
            echo "<p>O carro está parado</p>";
        }
        $this -> velocidadeActual();
        echo "<br>-------------------------------------";
    }

    function __toString()
    {
        echo "<br>-------------------------------------";
        return "<br>Marca: " . $this -> marca . "<br>Modelo: " . $this -> modelo . "<br>Cor: " . $this -> cor . "<br>Velocidade Máxima: " . $this -> velocidadeMaxima . 
        "<br>" . $this -> velocidadeActual() . "<br>electrico: " . $this -> electrico . "<br>Estado: " . $this -> ligado; 
        echo "<br>-------------------------------------";
    }
}

?>