<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 2</title>
</head>
<body>
    <h1>Unidad 2</h1>
    <?php
    // Crear las variables con los datos personales
    $nombre = "Carlos";
    $apellido = "Romero";
    $edad = 32;
    $foto = 'https://img.freepik.com/vector-gratis/circulo-azul-usuario-blanco_78370-4707.jpg?semt=ais_hybrid&w=740&q=80';

    // Imprimir las variables para mostrar los datos personales
    echo "<h2>Ficha personal:</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Apellido:</strong> $apellido</p>";
    echo "<p><strong>Edad:</strong> $edad</p>";
    echo "<img src=$foto>";
    ?>
</body>
</html>