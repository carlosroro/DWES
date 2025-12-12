<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades complementarias de condicionales UD3</title>
</head>
<body>
    <h1>Actividad 1:</h1>
    <h2>Número positivo o negativo:
        • Escribe un script que verifique si un número es positivo, negativo o cero.
    </h2>
    <?php
    $numero = 0;

    if ($numero > 0) {
        echo "El número $numero es positivo";
    } elseif ($numero < 0) {
        echo "El número $numero es negativo";
    } else {
        echo "El número es 0";
    }
    ?>
</body>
</html>