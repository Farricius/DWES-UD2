<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $base = 8;
    $altura = 5;

    $areaTri = ($base * $altura) / 2;   
    $areaCuadrado = $base * $altura;

    $diagonalMayor = 12;
    $diagonalMenor = 6;
    $areaRombo = ($diagonalMayor * $diagonalMenor) / 2;

    $radio = 5;
    define('PI', 3.14);
    $areaCircular = $radio * $radio * PI();

    echo "<p>El área del Triángulo de Base  $base y Altura $altura es $areaTri </p>";
    echo "<p>El área del Cuadrado de Base $base y Altura $altura es $areaCuadrado </p>";
    echo "<p>El área del Rombo de Diag. Mayor $diagonalMayor y Diag. Menor $diagonalMenor es $areaRombo </p>";
    //echo "El área del círculo con radio $radio, es de " , $circulo;
    printf("En el círculo de radio %s, su área es %s", $radio, sprintf("%01.2f", $areaCircular)); // 2 decimales

    ?>


</body>

</html>