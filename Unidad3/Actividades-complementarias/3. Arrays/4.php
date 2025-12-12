<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades complementarias de arrays UD3</title>
</head>
<body>
    <h1>Actividad 4:</h1>
    <h2>Buscar valor en un array:
        • Crea un programa que busque un valor específico dentro de un array y
        muestre si fue encontrado o no.
    </h2>
    <?php
    $cosas = ["hola", 3, "gato", 7];

    if (in_array("hola", $cosas)) {
        echo "Elemento encontrado en el array";
    } else {
        echo "Elemento no encontrado";
    }
    ?>
</body>
</html>