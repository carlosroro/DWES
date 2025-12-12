<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades complementarias de funciones UD3</title>
</head>
<body>
    <h1>Actividad 1:</h1>
    <h2>
        1. Función para sumar dos números:
        • Escribe una función que reciba dos números como parámetros y retorne
        su suma.
    </h2>
    <?php
    function Sumar($num1, $num2) {
        return $num1 + $num2;
    }

    echo "La suma de 10 + 5 es " . Sumar(10, 5);
    ?>
</body>
</html>