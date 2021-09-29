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

    define('operacionesDiariasMax', 6);
    define('operacionesSemanalesMax', 30);

    if ($operacionesDiarias.intval() > 'operacionesDiariasMax') {
        echo "<p>Las  oper. diarias -> $operacionesDiarias son superiores/iguales a las máximas permitidas.</p>";
    }

    if ($operacionesSemanales > 'operacionesSemanalesMax') {
        echo "<p>Las oper. semanales -> $operacionesSemanales son superiores/iguales a las máximas permitidas.</p>";
    }

    if ($operacionesDiarias === 'operacionesDiariasMax') {
        echo "<p>Las  oper. diarias -> $operacionesDiarias son EXACTAMENTE las máximas permitidas.</p>";
    }

    if ($operacionesDiarias != $operacionesSemanales) {
        echo "<p>Las  oper. diarias -> $operacionesDiarias y semanales -> $operacionesSemanales son distinta cantidad. </p>";
    }

    ?>
</body>

</html>