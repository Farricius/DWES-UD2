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
    $variable = "Pepe";
    echo $variable;
    echo "<br>";

    echo "La variable es ARRAY?  " , var_export(is_array($variable)), "<br>";
    echo "La variable es TIPO...? ", var_export(gettype($variable)), "<br>";
    echo "La variable es BOOLEAN? ", var_export(is_bool($variable)), "<br>";

    $variable = 24.30;
    echo ($variable);
    echo "<br>";

    echo "La variable es FLOAT?  " , var_export(is_float($variable)), "<br>";
    echo "La variable es NULL?  " , var_export(is_null($variable)), "<br>";
    echo "La variable es STRING? " , var_export(is_string($variable)), "<br>";

    ?>
</body>

</html>