<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de condicionales UD3</title>
</head>
<body>
    <h1>Ejercicio 2:</h1>
    <h2>Carga en variables mes y año e indica el número de días del mes. Utiliza la estructura de control switch.</h2>
    <?php
    $mes = "octubre";
    $año = 2025;

    switch ($mes) {
        case 'enero':
        case 'marzo':
        case 'mayo':
        case 'julio':
        case 'agosto':
        case 'octubre':
        case 'diciembre':
            echo "El mes de $mes tiene 31 días";
            break;

        case 'abril':
        case 'junio':
        case 'septiembre':
        case 'noviembre':
            echo "El mes de $mes tiene 30 días";
            break;

        case 'febrero':
            echo "El mes de $mes tiene 28 días";
            break;
        
        default:
            echo "Mes no válido";
            break;
    }
    ?>
</body>
</html>