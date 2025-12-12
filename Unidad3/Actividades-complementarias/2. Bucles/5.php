<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades complementarias de bucles UD3</title>
</head>
<body>
    <h1>Actividad 5:</h1>
    <h2>Factorial de un número:
        • Calcula el factorial de un número dado usando un bucle for.
    </h2>
    <?php
    $numero = 5;
    $resultado = 1;

    for ($i = 1; $i <= $numero; $i++) {
        $resultado *= $i;
    }

    echo "El factorial de $numero es: $resultado";
    ?>
</body>
</html>