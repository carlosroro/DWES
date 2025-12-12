<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de bucles UD3</title>
</head>
<body>
    <h1>Ejercicio 2:</h1>
    <h2>Sumar los 3 primeros números pares.</h2>
    <?php
    $suma = 0;
    $contador = 0;
    $numero = 1;

    while ($contador < 3) {
        if ($numero % 2 == 0) {
            $suma += $numero;
            $contador++;
        }
        $numero++;
    }

    echo $suma
    ?>
</body>
</html>