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
    $var1 = 4;
    $var2 = 7;

    printf("El número %d es %b en Binario", $var1, $var1);
    echo "<br>";
    printf("El número %d es %b en Binario", $var2, $var2);

    // Operador AND
    $varAND = $var1 & $var2;
    printf("<p>Con operador bit a bit AND: %b ", $varAND);

    //Operador NOT
    $varNOT = ~$var1;
    printf("<p>Variable 1 con operador bit a bit NOT: %b ", $varNOT);

    $varNOT = ~$var2;
    printf("<p>Variable 2 con operador bit a bit NOT: %b ", $varNOT);


    // Operador OR
    $varOR = $var1 | $var2;
    printf("<p>Con operador bit a bit OR: %b ", $varOR);

    // Operador XOR
    $varXOR = $var1 ^ $var2;
    printf("<p>Con operador bit a bit XOR: %b ", $varXOR);

    ?>

</body>

</html>