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
    define('tarjetaCliente', 8);

    $subTotal = ($precioPantalon * $cantidadPantalones) + ($precioCamisa * $cantidadCamisas);
    $total = number_format($subTotal, 2);

    $subTotalTarjeta = $total * (100 - tarjetaCliente) / 100; // (100 - 8) / 100 = 0.92 aplicando
    $totalTarjeta = number_format($subTotalTarjeta, 2);

    echo "<p>El precio de un pantalón es $precioPantalon </p>";
    echo "<p>El precio de una camisa es $precioCamisa </p>";
    echo "<p>El precio de la compra (sin descuento) es $total </p>";
    echo "<p>El precio de la compra (con descuento) es $totalTarjeta </p>";

    $precioZapatos = 45.99;
    $descuentoZapateria = 12;
    $precioZapatosCon += $precioZapatos - ($precioZapatos * ($descuentoZapateria /100));
    echo "El precio de un zapato es de $precioZapato";

    //printf ("<p> El precio de un zapato con descuento 12% es: " , sprintf("%01.2f", $precioZapatoCon), "euro</p>";
	
    $cuentaFinal += $totalTarjeta + $precioZapatoCon;
	
	//echo "El precio de TODA la compra es: " , sprintf(%01.2f, $cuentaFinal) "euros</p>;
    
    ?>
</body>

</html>