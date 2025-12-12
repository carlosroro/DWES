<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades complementarias de funciones UD3</title>
</head>
<body>
    <h1>Actividad 4:</h1>
    <h2>
        4. Función recursiva para calcular el factorial:
            • Implementa una función recursiva que calcule el factorial de un número.
    </h2>
    <?php
    function factorial($n) {
        if ($n == 0 || $n == 1) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }

    $numero = 5;
    echo "El factorial de $numero es: " . factorial($numero);
?>
</body>
</html>