<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $precioPantalon = 29.99;
    $cantidadPantalones = 3;
    $precioCamisa = 25.99;
    $cantidadCamisas = 2;
    define('tarjetaDescuento', 8);

    $subTotal = ($precioPantalon * $cantidadPantalones) + ($precioCamisa * $cantidadCamisas);
    $total = number_format($subTotal, 2);

    $subTotalDescuento = $total * (100 - tarjetaDescuento) / 100; // (100 - 8) / 100 = 0.92 aplicado al precio
    $totalDescuento = number_format($subTotalDescuento, 2);

    echo "<p>El precio de un pantalón es $precioPantalon </p>";
    echo "<p>El precio de una camisa es $precioCamisa </p>";
    echo "<p>El precio total de la compra (sin descuento) es $total </p>";
    echo "<p>El precio total de la compra (con descuento) es $totalDescuento </p>";
    ?>
</body>

</html>