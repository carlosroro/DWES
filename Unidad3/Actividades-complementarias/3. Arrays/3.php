<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades complementarias de arrays UD3</title>
</head>
<body>
    <h1>Actividad 3:</h1>
    <h2>Suma de los elementos de un array:
        • Escribe un script que sume todos los elementos de un array numérico.
    </h2>
    <?php
    $numeros = [11, 32, 23, 4, 51];

    $suma = array_sum($numeros);
    echo "La suma de los elementos del array es $suma";
    ?>
</body>
</html>