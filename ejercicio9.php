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

    // Variables de información del servidor: PHP_SELF, SERVER_ADDR, SERVER_NAME, DOCUMENT_ROOT, REMOTE_ADDR, REQUEST_METHOD
    echo $_SERVER['PHP_SELF'];
    echo " --- PHP_SELF --- Retorna el nombre de archivo del script ejecutado actual <br>";

    echo $_SERVER['SERVER_ADDR'];
    echo " --- SERVER_ADDR --- La dirección IP del servidor donde se está ejecutando actualmente el script.<br>";

    echo $_SERVER['SERVER_NAME'];
    echo " --- SERVER_NAME --- El nombre del host del servidor donde se está ejecutando actualmente el script. Si el script se ejecuta en un host virtual se obtendrá el valor del nombre definido para dicho host virtual. <br>";

    echo $_SERVER['DOCUMENT_ROOT'];
    echo " --- DOCUMENT_ROOT --- El directorio raíz de documentos del servidor en el cual se está ejecutando el script actual, según está definida en el archivo de configuración del servidor. <br>";

    echo $_SERVER['REMOTE_ADDR'];
    echo "--- REMOTE_ADDR --- La dirección IP desde la cual está viendo la página actual el usuario <br>";

    echo $_SERVER['REQUEST_METHOD'];
    echo "--- REQUEST_METHOD --- Método de petición empleado para acceder a la página, es decir 'GET', 'HEAD', 'POST', 'PUT'. <br>";

    // Crea una función y define dentro una variable local, una local estática y uséis una global.
    // Intenta acceder a ellas desde fuera de la función y mostrarlas por pantalla.

    $variableGlobal = "Hola ";

    function testVariables()
    {

        global $variableGlobal;
        $variableGlobal = "Hooolaaa mundooo";
        $variableLocal = "Hatajo se puede escribir con H según la RAE";
        static $variableStatic = "Variable scope static";
    }

    // No Funcionan fuera:

    echo "<p>Valor variable Global : $variableGlobal";
    echo "<p>Valor variable Local dice: $variableLocal</p>";
    echo "<p>Valor variable estática dice: $variableStatic</p>"; // No se borra tras método


    testVariables();
    echo "<p> Valor variable Global : $variableGlobal</p>";
    echo "<p> Valor variable Estática: $variableStatic</p>"; // na

    ?>
</body>

</html>