<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de condicionales UD3</title>
</head>
<?php
    $hora = date("H");

    if ($hora >= 7 && $hora < 12) {
        echo "<body style='background-color: rgba(92, 141, 193, 1)'>";
    } elseif ($hora >= 12 && $hora < 20) {
        echo "<body style='background-color: #8f8f'>";
    } elseif ($hora >= 20 && $hora < 7) {
        echo "<body style='background-color: rgba(223, 135, 27, 1)'>";
    } else {
        echo "<body>";
    }
?>
    <h1>Ejercicio 4</h1>
    <h2>Modifica la página inicial realizada, incluyendo una imagen de cabecera en función de la
    estación del año en la que nos encontremos y un color de fondo en función de la hora del día.</h2>
    <?php
    $estacion = "invierno";

    if ($estacion == "otoño") {
        echo "<img src='https://www.casadelaciencia.csic.es/sites/default/files/images/los_colores_del_otono.jpg'";
    } elseif ($estacion == "invierno") {
        echo "<img src='https://cdn-news.clima.com/images/2018/11/invierno_20181.jpg'>";
    } elseif ($estacion == "primavera") {
        echo "<img src='https://s1.significados.com/foto/primavera-og.jpg?class=ogImageSquare'>";
    } elseif ($estacion == "verano") {
        echo "<img src='https://concepto.de/wp-content/uploads/2018/08/verano1-e1535637769656.jpg'>";
    }
    ?>
</body>
</html>