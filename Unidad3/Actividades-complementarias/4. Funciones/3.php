<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades complementarias de funciones UD3</title>
</head>
<body>
    <h1>Actividad 3:</h1>
    <h2>
        3. Función para convertir grados Celsius a Fahrenheit:
            • Escribe una función que convierta una temperatura dada en grados
            Celsius a Fahrenheit.
    </h2>
    <?php
    function Grados($celsius) {
        return (9 / 5 * $celsius) + 32;
    }

    echo "35 grados Celsius son " . Grados(35) . " Fahrenheit";
    ?>
</body>
</html>