<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 9</title>
</head>
<body>
    <h1>Unidad 2</h1>
    <?php
    $valor = "hola";
    if (is_string($valor)) {
        echo "Valor es string.<br>";
    }

    $valor = 32.23;
    if (is_double($valor)) {
        echo "Valor es double.<br>";
    }

    $valor = true;
    if (is_bool($valor)) {
        echo "Valor es boolean.<br>";
    }

    $valor = 100;
    if (is_int($valor)) {
        echo "Valor es integer.<br>";
    }

    $valor = null;
    if (is_null($valor)) {
        echo "Valor is NULL.<br>";
    }
    ?>
</body>
</html>