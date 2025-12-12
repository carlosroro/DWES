<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades complementarias de bucles UD3</title>
</head>
<body>
    <h1>Actividad 4:</h1>
    <h2>Números pares del 1 al 100:
        • Utiliza un bucle para imprimir todos los números pares entre 1 y 100.
    </h2>
    <?php
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            echo "$i<br>";
        }
    }
    ?>
</body>
</html>