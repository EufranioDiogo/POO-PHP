<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carro Exemplo</title>
</head>
<body>
    <?php

    require_once "Carro.php";

    $carro1 = new Carro("Volvo", "Legacy", "Preto Baço", 320, 60, false);

    echo "" . $carro1 -> __toString();

    $carro1 -> ligarCarro();

    $carro1 -> acelerar();
    $carro1 -> acelerar();
    $carro1 -> acelerar();
    $carro1 -> acelerar();
    $carro1 -> acelerar();
    $carro1 -> acelerar();
    $carro1 -> acelerar();
    $carro1 -> acelerar();
    $carro1 -> acelerar();
    $carro1 -> acelerar();
    $carro1 -> acelerar();
    $carro1 -> acelerar();
    $carro1 -> acelerar();
    $carro1 -> acelerar();
    $carro1 -> acelerar();
    $carro1 -> acelerar();
    $carro1 -> acelerar();
    $carro1 -> acelerar();
    $carro1 -> acelerar();
    $carro1 -> acelerar();
    
    $carro1 -> desligarCarro();
    
    ?>
</body>
</html>