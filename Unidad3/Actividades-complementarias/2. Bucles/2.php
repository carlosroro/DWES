<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades complementarias de bucles UD3</title>
</head>
<body>
    <h1>Actividad 2:</h1>
    <h2>Suma de los primeros 50 números:
        • Calcula la suma de los primeros 50 números naturales usando un bucle
        while.
    </h2>
    <?php
    $i = 1;
    $contador = 0;

    while ($i <= 50) {
        $contador += $i;
        $i++;
    }

    echo $contador;
    ?>
</body>
</html>