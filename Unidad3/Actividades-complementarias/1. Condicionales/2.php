<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades complementarias de condicionales UD3</title>
</head>
<body>
    <h1>Actividad 2:</h1>
    <h2>Mayor de tres números:
        • Dado tres números, determina cuál es el mayor de los tres.
    </h2>
    <?php
    $numero1 = 8;
    $numero2 = 6;
    $numero3 = 7;

    if ($numero1 > $numero2 && $numero1 > $numero3) {
        echo "El $numero1 es mayor que $numero2 y $numero3";
    } elseif ($numero2 > $numero1 && $numero2 > $numero3) {
        echo "El $numero2 es mayor que $numero1 y $numero3";
    } elseif ($numero3 > $numero1 && $numero3 > $numero2) {
        echo "El $numero3 es mayor que $numero1 y $numero2";
    }
    ?>
</body>
</html>