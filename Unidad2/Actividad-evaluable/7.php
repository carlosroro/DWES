<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 7</title>
</head>
<body>
    <h1>Unidad 2</h1>
    <?php
    $numero = 8;
    echo "Valor actual $numero";
    echo "<br>";
    
    $numero += 2;
    echo "Suma 2. Valor ahora $numero";
    echo "<br>";

    $numero -= 4;
    echo "Resta 4. Valor ahora $numero";
    echo "<br>";

    $numero *= 5;
    echo "Multiplica por 5. Valor ahora $numero";
    echo "<br>";

    $numero /= 3;
    echo "Divide por 3. Valor ahora $numero";
    echo "<br>";

    ++$numero;
    echo "Incrementa el valor en 1. Valor ahora $numero";
    echo "<br>";

    --$numero;
    echo "Decrementa el valor en 1. Valor ahora $numero";
    ?>
</body>
</html>