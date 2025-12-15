<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de formularios UD3</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: 20px auto; }
        th, td { border: 1px solid black; text-align: center; padding: 10px; }
        th { background-color: whitesmoke; }
        .nacional { background-color: red; color: white; }
        .comunidad { background-color: blue; color: white; }
        .local { background-color: green; color: white; }
    </style>
</head>
<body>
    <h1>Ejercicio 1:</h1>
    <h2>Modifica el ejercicio del calendario para que el mes y el año se lean en un
        formulario. Añade las siguientes especificaciones:
        <br>a. Por defecto se carga el mes y año actual.
        <br>b. Definición de días festivos en un array.
        <br>c. Utilizar colores para diferenciar festivos nacionales, de comunidad y locales.
        <br>d. Cada día será un enlace a una página que mostrará la fecha seleccionada
    </h2>

    <form action="#" method="post">
        <input type="text" name="mes" id="mes" placeholder="Mes" required>
        <input type="text" name="anio" id="anio" placeholder="Año" required>
        <input type="submit" value="Enviar">
    </form>

    <?php
    date_default_timezone_set("Europe/Madrid");

    if (isset($_GET["fecha"])) {
        $fecha = $_GET["fecha"];
        echo "<h2>Has seleccionado la fecha: " . htmlspecialchars($fecha) . "</h2>";
        echo "<p><a href='1.php'>Volver al calendario</a></p>";
        exit;
    }

    if (isset($_POST["mes"])) {
        $mes = (int)$_POST["mes"];
    } else {
        $mes = date("n");
    }
    if (isset($_POST["anio"])) {
        $anio = (int)$_POST["anio"];
    } else {
        $anio = date("Y");
    }

    $festivos_estatales = ["$anio-01-01", "$anio-12-25", "$anio-05-01", "$anio-12-06"];
    $festivos_autonomicos = ["$anio-02-28"];
    $festivos_locales = ["$anio-10-24"];

    $primerDiaSemana = date("N", strtotime("$anio-$mes-01"));
    $diasMes = cal_days_in_month(CAL_GREGORIAN, $mes, $anio);

    echo "<h3>Calendario de $mes/$anio</h3>";
    echo "<table>";
    echo "<tr>
            <th>Lun</th><th>Mar</th><th>Mié</th>
            <th>Jue</th><th>Vie</th><th>Sáb</th><th>Dom</th>
          </tr><tr>";

    for ($i = 1; $i < $primerDiaSemana; $i++) {
        echo "<td></td>";
    }

    for ($dia = 1; $dia <= $diasMes; $dia++) {
        $fecha = sprintf("%04d-%02d-%02d", $anio, $mes, $dia);
        $clase = "";

        if (in_array($fecha, $festivos_estatales)) {
            $clase = "nacional";
        } elseif (in_array($fecha, $festivos_autonomicos)) {
            $clase = "comunidad";
        } elseif (in_array($fecha, $festivos_locales)) {
            $clase = "local";
        }

        echo "<td class='$clase'><a href='?fecha=$fecha'>$dia</a></td>";

        if ((($dia + $primerDiaSemana - 1) % 7) == 0) {
            echo "</tr><tr>";
        }
    }

    echo "</tr></table>";
    ?>
</body>
</html>