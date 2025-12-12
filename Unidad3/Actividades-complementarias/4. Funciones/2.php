<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades complementarias de funciones UD3</title>
</head>
<body>
    <h1>Actividad 2:</h1>
    <h2>
        2. Función para verificar si un número es primo:
            • Crea una función que determine si un número dado es primo o no.
    </h2>
    <?php
    function esPrimo($numero) {
        if ($numero <= 1) {
            return false;
        }
        if ($numero == 2) {
            return true;
        }
        if ($numero % 2 == 0) {
            return false;
        }
        $raiz = sqrt($numero);
        for ($i = 3; $i < $raiz; $i += 2) { 
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }

    if (esPrimo(10)) {
        echo "Es primo";
    } else {
        echo "No es primo";
    }
    ?>
</body>
</html>