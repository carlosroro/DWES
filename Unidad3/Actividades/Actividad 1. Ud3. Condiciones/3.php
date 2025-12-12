<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de condicionales UD3</title>
</head>
<body>
    <h1>Ejercicio 3:</h1>
    <h2>Carga fecha de nacimiento en variables y calcula la edad.</h2>
    <?php
    $diaNacimiento = 7;
    $mesNacimiento = 6;
    $añoNacimiento = 2010;

    $diaActual = 21;
    $mesActual = 10;
    $añoActual = 2025;

    $edad = $añoActual - $añoNacimiento;

    echo "Tienes $edad años";
    ?>
</body>
</html>