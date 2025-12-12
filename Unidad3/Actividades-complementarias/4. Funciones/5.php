<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades complementarias de funciones UD3</title>
</head>
<body>
    <h1>Actividad 5:</h1>
    <h2>
        5. Función para invertir una cadena de texto:
            • Crea una función que tome una cadena de texto y la devuelva invertida.
    </h2>
    <?php
    function InvertirCadena($cadena) {
        return strrev($cadena);
    }

    echo InvertirCadena("gato");
    ?>
</body>
</html>