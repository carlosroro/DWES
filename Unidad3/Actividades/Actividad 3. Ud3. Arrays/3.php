<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de arrays UD3</title>
</head>
<body>
    <h1>Ejercicio 3:</h1>
    <h2>Crear un array con los alumnos de clase y permitir la selección aleatoria de uno de
        ellos. El resultado debe mostrar nombre y fotografía.</h2>
    <?php
    $alumnos = [
        "Manuel Pérez" => "<img src='https://upload.wikimedia.org/wikipedia/en/0/02/Homer_Simpson_2006.png'>",
        "Ana Martínez" => "<img src='https://www.tebeosfera.com/T3content/img/T3_personajes/o/n/marge_simpson.jpg'>",
        "Antonio López" => "<img src='https://upload.wikimedia.org/wikipedia/en/a/aa/Bart_Simpson_200px.png'>",
        "María Sánchez" => "<img src='https://upload.wikimedia.org/wikipedia/en/e/ec/Lisa_Simpson.png'>",
        "Gervasio Sanchis" => "<img src='https://upload.wikimedia.org/wikipedia/en/8/84/Ned_Flanders.png'>",
        "Marina Perea" => "<img src='https://www.lavanguardia.com/files/content_image_mobile_filter/uploads/2020/04/15/5fa8fef6013a2.png'>"
    ];

    $nombre = array_rand($alumnos);
    $foto = $alumnos[$nombre];

    echo "$nombre:";
    echo $foto;
    ?>
</body>
</html>