<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de condicionales UD3</title>
</head>
<body>
    <h1>Ejercicio 1:</h1>
    <h2>Almacena tres números en variables y escribirlos en pantalla de manera ordenada.</h2>
    <?php
    $a = 1;
    $b = 2;
    $c = 3;

    if ($a > $b && $a > $c) {
        echo "$a es mayor que $b y $c";
    } elseif ($b > $a && $b > $c) {
        echo "$b es mayor que $a y $c";
    } elseif ($c > $a && $c > $b) {
        echo "$c es mayor que $a y $b";
    }
    ?>
</body>
</html>