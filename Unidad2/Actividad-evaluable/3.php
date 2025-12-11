<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 3</title>
</head>
<body>
    <h1>Unidad 2</h1>
    <?php
    const PI = 3.1416;
    $radio = 50;

    $area = PI * $radio ** 2;
    $longitud = 2 * PI * $radio;

    echo "<p>El radio es de $radio</p>";
    echo "<p>El área del círculo es de $area</p>";
    echo "<p>La longitud del círculo es de $longitud</p>";
    ?>
    
    <svg width="200" height="200">
        <circle cx="100" cy="100" r="<?php echo $radio; ?>" fill="lightblue" stroke="blue" stroke-width="2" />
    </svg>
</body>
</html>