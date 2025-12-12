<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de bucles UD3</title>
</head>
<body>
    <h1>Ejercicio 1:</h1>
    <h2>Escribir los números 1 al 10</h2>
    <?php
    echo "Con while:<br>";
    $a = 1;

    while ($a <= 10) {
        echo $a++;
        echo "<br>";
    }
    
    print "<br>Con for:<br>";
    
    for ($i=1; $i <= 10; $i++) {
        print $i;
        print "<br>";
    }
    ?>
</body>
</html>