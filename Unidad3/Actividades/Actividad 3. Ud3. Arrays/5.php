<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de arrays UD3</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid black;
            font-size: 100px;
        }

        td {
            text-align: center;
            padding: 2px;
            border: 1px solid black;
        }

        .estatal {
            background-color: red;
        }

        .comunidad {
            background-color: blue;
        }

        .local {
            background-color: green;
        }
    </style>
</head>
<body>
    <h1>Ejercicio 5:</h1>
    <h2>Mejorar el calendario con un array de los días festivos: colores diferentes,
        nacionales, comunidad, locales.</h2>
    <?php
    $festivos = [
        "Estatal" => [8, 25],
        "Comunidad" => [24, 7],
        "Local" => [1, 31]
    ];

    echo "<table>";
    for ($i = 1; $i <= 31; $i++) {
        if (($i - 1) % 7 == 0) {
            echo "<tr>";
        }

        $clase = "";
        if (in_array($i, $festivos["Estatal"])) {
            $clase = "estatal";
        } elseif (in_array($i, $festivos["Comunidad"])) {
            $clase = "comunidad";
        } elseif (in_array($i, $festivos["Local"])) {
            $clase = "local";
        }

        echo "<td class='$clase'>$i</td>";
        
        if ($i % 7 == 0) {
            echo "</tr>";
        }
    }

    if ($i % 7 != 1) {
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>