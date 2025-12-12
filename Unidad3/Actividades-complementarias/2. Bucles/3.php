<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades complementarias de bucles UD3</title>
</head>
<body>
    <h1>Actividad 3:</h1>
    <h2>Tabla de multiplicar:
        • Escribe un script que muestre la tabla de multiplicar de un número dado
        (del 1 al 10).
    </h2>
    <?php
    $numero = 3;

    for ($i = 0; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i es $resultado<br>";
    }
    ?>
</body>
</html>