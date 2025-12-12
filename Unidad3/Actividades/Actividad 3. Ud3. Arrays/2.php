<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de arrays UD3</title>
    <style>
        p {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>Ejercicio 2:</h1>
    <h2>Indexar los ejercicios mediante un array.</h2>
    <?php
    $ejercicios = [
        'Ejercicio 1a' => '<a href="http://localhost/dwes/ud3/actividades/3.arrays/1.php">Ejercicio 1</a><br>',
        'Ejercicio 1b' => '<a href="http://localhost/dwes/ud3/actividades/3.arrays/1.php">Ejercicio 1</a><br>',
        'Ejercicio 1c' => '<a href="http://localhost/dwes/ud3/actividades/3.arrays/1.php">Ejercicio 1</a><br>',
        'Ejercicio 1d' => '<a href="http://localhost/dwes/ud3/actividades/3.arrays/1.php">Ejercicio 1</a><br>',
        'Ejercicio 1e' => '<a href="http://localhost/dwes/ud3/actividades/3.arrays/1.php">Ejercicio 1</a><br>',
        'Ejercicio 2' => '<a href="http://localhost/dwes/ud3/actividades/3.arrays/2.php">Ejercicio 2</a><br>',
        'Ejercicio 3' => '<a href="http://localhost/dwes/ud3/actividades/3.arrays/3.php">Ejercicio 3</a><br>',
        'Ejercicio 4' => '<a href="http://localhost/dwes/ud3/actividades/3.arrays/4.php">Ejercicio 4</a><br>',
        'Ejercicio 5' => '<a href="http://localhost/dwes/ud3/actividades/3.arrays/5.php">Ejercicio 5</a>'
    ];

    foreach ($ejercicios as $clave => $valor) {
        echo "<p><strong>$clave:</strong> $valor</p>";
    }
    ?>
</body>
</html>