<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades complementarias de arrays UD3</title>
</head>
<body>
    <h1>Actividad 1:</h1>
    <h2>Array de días de la semana:
        • Crea un array con los días de la semana e imprime cada uno de ellos en
        una nueva línea
    </h2>
    <?php
    $diasSemana = [1 => "Lunes",
                   2 => "Martes",
                   3 => "Miércoles",
                   4 => "Jueves",
                   5 => "Viernes",
                   6 => "Sábado",
                   7 => "Domingo"
                  ];

    foreach ($diasSemana as $clave => $valor) {
        echo "El día número $clave es $valor<br>";
    }
    ?>
</body>
</html>