<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades complementarias de arrays UD3</title>
</head>
<body>
    <h1>Actividad 2:</h1>
    <h2>Promedio de notas:
        • Dado un array de calificaciones, calcula el promedio.
    </h2>
    <?php
    $calificaciones = [
        5.50,
        3.75,
        5.00,
        9.30,
        10.00
                      ];

    $suma = 0;

    foreach ($calificaciones as $valor) {
        $suma += $valor;
    }

    $promedio = $suma / count($calificaciones);
    echo "El promedio de notas es $promedio";
    ?>
</body>
</html>