<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E1</title>
</head>

<body>
    <?php
    $fullName = "José David Hernández";
    $edad = 24;
    $ciudad = "Sevilla";

    printf("Soy %s tengo %d años de edad y vivo en %s", $fullName, $edad, $ciudad);
    print "<p>";
    echo "  Soy ", $fullName, ", tengo ", $edad, " años de edad y vivo en ", $ciudad;
    print "</p>";

    ?>
</body>

</html>