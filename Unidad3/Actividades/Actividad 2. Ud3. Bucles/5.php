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
    $mes = 11;
    $anio = 2025;

    $hoy = date("j");
    $mesActual = date("n");
    $anioActual = date("Y");

    $festivos = [1, 6];

    $diasMes = cal_days_in_month(CAL_GREGORIAN, $mes, $anio);

    $primerDiaSemana = date("w", strtotime("$anio-$mes-01"));

    $primerDiaSemana = ($primerDiaSemana == 0) ? 6 : $primerDiaSemana - 1;

    echo "<table border='1' cellspacing='0' cellpadding='5'>";
    echo "<tr>
            <th>Lun</th><th>Mar</th><th>Mié</th>
            <th>Jue</th><th>Vie</th><th>Sáb</th><th>Dom</th>
        </tr><tr>";

    for ($i = 0; $i < $primerDiaSemana; $i++) {
        echo "<td></td>";
    }

    $diaSemana = $primerDiaSemana;

    for ($dia = 1; $dia <= $diasMes; $dia++) {
        $color = "black";

        if ($dia == $hoy && $mes == $mesActual && $anio == $anioActual) {
            $color = "green";
        }

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

    if ($diaSemana > 0) {
        for ($i = $diaSemana; $i < 7; $i++) {
            echo "<td></td>";
        }
    }

    echo "</tr></table>";
?>
</body>
</html>