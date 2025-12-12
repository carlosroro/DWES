<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades complementarias de condicionales UD3</title>
</head>
<body>
    <h1>Actividad 4:</h1>
    <h2>Días de la semana:
        • Crea un script que reciba un número entre 1 y 7, y muestre el día de la
        semana correspondiente (1 es Lunes, 7 es Domingo).</h2>
    <?php
    $dia = 4;

    switch ($dia) {
        case 1:
            echo "Es lunes";
            break;
        case 2:
            echo "Es martes";
            break;
        case 3:
            echo "Es miércoles";
            break;
        case 4:
            echo "Es jueves";
            break;
        case 5:
            echo "Es viernes";
            break;
        case 6:
            echo "Es sábado";
            break;
        case 7:
            echo "Es domingo";
            break;
        default:
            echo "Valor incorrecto";
            break;
    }
    ?>
</body>
</html>