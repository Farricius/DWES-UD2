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
    $var1 = 3;
    $var2 = 23;
    $varXD;

    printf("El número %d ahora es %b en Binario! ", $var1, $var1);
    printf("El número %d ahora es %b en Binario! ", $var2, $var2);

    // Operador AND, CON RPINT F Y EL BINARIO ANTES DE LA FÓRMULA
    $var3 = $var1 & $var2;
    printf("<p> Con operador AND %b :", $var3);

    // Operador NOT 1
    //$varXD = ~$var1
    // echo "<p> El $var1 con operador NOT: $varXD </p> ";

    // Operador NOT 2
    // $var3 = $var1 & $var2;
    // echo "<p> Con operador AND: $var3 </p> ";

    // Operador OR
    // $varXD = $var1 | $var2;
    //echo "<p> Con operador OR: $varXD </p> ";


    ?>

</body>

</html>