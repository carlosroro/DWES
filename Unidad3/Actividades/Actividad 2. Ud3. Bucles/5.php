<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de bucles UD3</title>
</head>
<body>
    <h1>Ejercicio 5:</h1>
    <h2>Dado el mes y año almacenados en variables, escribir un programa que muestre el
        calendario mensual correspondiente. Marcar el día actual en verde y los festivos
        en rojo.
    </h2>
    <?php
    // Variables de mes y año
    $mes = 11; // Noviembre
    $anio = 2025;

    // Día actual
    $hoy = date("j");
    $mesActual = date("n");
    $anioActual = date("Y");

    // Festivos (ejemplo: array con días festivos del mes)
    $festivos = [1, 6]; // Día 1 y 6 del mes

    // Número de días del mes
    $diasMes = cal_days_in_month(CAL_GREGORIAN, $mes, $anio);

    // Primer día de la semana del mes (0=domingo, 1=lunes, ...)
    $primerDiaSemana = date("w", strtotime("$anio-$mes-01"));

    // Ajustar para que la semana empiece en lunes
    $primerDiaSemana = ($primerDiaSemana == 0) ? 6 : $primerDiaSemana - 1;

    echo "<table border='1' cellspacing='0' cellpadding='5'>";
    echo "<tr>
            <th>Lun</th><th>Mar</th><th>Mié</th>
            <th>Jue</th><th>Vie</th><th>Sáb</th><th>Dom</th>
        </tr><tr>";

    // Espacios en blanco antes del primer día
    for ($i = 0; $i < $primerDiaSemana; $i++) {
        echo "<td></td>";
    }

    $diaSemana = $primerDiaSemana;

    // Pintar los días
    for ($dia = 1; $dia <= $diasMes; $dia++) {
        $color = "black"; // color por defecto

        // Día actual en verde
        if ($dia == $hoy && $mes == $mesActual && $anio == $anioActual) {
            $color = "green";
        }

        // Festivos en rojo
        if (in_array($dia, $festivos)) {
            $color = "red";
        }

        echo "<td style='color:$color'>$dia</td>";

        $diaSemana++;
        if ($diaSemana == 7) {
            echo "</tr><tr>";
            $diaSemana = 0;
        }
    }

    // Rellenar celdas vacías al final
    if ($diaSemana > 0) {
        for ($i = $diaSemana; $i < 7; $i++) {
            echo "<td></td>";
        }
    }

    echo "</tr></table>";
?>
</body>
</html>