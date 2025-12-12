<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de bucles UD3</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px;
            float: left;
        }
    </style>
</head>
<body>
    <h1>Ejercicio 3:</h1>
    <h2>Tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columna.</h2>
    <?php
    for ($numero = 1; $numero <= 10; $numero++) {
        echo "<table>";
        echo "<caption>Tabla del $numero</caption>";
        for ($i = 0; $i <= 10; $i++) { 
            $resultado = $numero * $i;
            echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>