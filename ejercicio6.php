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
    $operacionesDiarias = "2"; //En String - DEP
    $operacionesSemanales = 50; //En Entero

    define('OPERACIONESDIARIASMAX', 6);
    define('OPERACIONESSEMANALESMAX', 30);

    echo "<p>Las  oper. diarias son superiores/iguales a las máximas permitidas: ", var_export($operacionesDiarias >= OPERACIONESDIARIASMAX);

    echo "<p>Las  oper. semanales son superiores/iguales a las máximas permitidas: ", var_export($operacionesSemanales >= OPERACIONESSEMANALESMAX);

    echo "<p>Las  oper. diarias son EXACTAMENTE las máximas permitidas: ", var_export($operacionesDiarias == OPERACIONESDIARIASMAX);

    echo "<p>Las  oper. diarias son DISTINTAS a las semanales: ", var_export($operacionesDiarias != $operacionesSemanales);

    ?>
</body>

</html>