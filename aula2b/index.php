<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02b - POO</title>
</head>
<body>
    <?php
        require_once "Caneta.php";

        $caneta1 = new Caneta();
        $caneta1 -> cor = "Azul";
        $caneta1 -> ponta = 0.5;
        $caneta1 -> tampada = false;
        $caneta1 -> tampar();

        $caneta1 -> rabiscar();

        var_dump($caneta1);

        $caneta2 = new Caneta();
        $caneta2 -> cor = "Vermelha";
        $caneta2 -> ponta = 1.5;
        $caneta2 -> tampada = true;
        echo "<p></p>";
        $caneta2 -> destampar();
        $caneta2 -> rabiscar();
    ?>
</body>
</html>