<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades complementarias de arrays UD3</title>
</head>
<body>
    <h1>Actividad 5:</h1>
    <h2>Array multidimensional:
        • Crea un array multidimensional con al menos 3 estudiantes y sus
        respectivas notas. Luego imprime cada estudiante con su promedio.
    </h2>
    <?php
    $alumnos = [
        "Manuel" => [7.00, 4.5, 3.75],
        "Ana" => [5.00, 2.50, 8.50],
        "Antonio" => [3.50, 6.75, 9.00]
    ];

    foreach ($alumnos as $nombre => $notas) {
        $suma = array_sum($notas);
        $cantidad = count($notas);
        $promedio = $suma / $cantidad;

        echo "El promedio de las notas de $nombre es " . number_format($promedio, 2);
        echo "<br>";
    }
    ?>
</body>
</html>