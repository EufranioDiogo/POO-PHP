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
        $caneta1 -> modelo = "BIC cristal";
        $caneta1 -> cor = "Azul";
        var_dump($caneta1);
    ?>
</body>
</html>