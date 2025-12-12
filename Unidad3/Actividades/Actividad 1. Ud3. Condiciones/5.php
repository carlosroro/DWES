<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de condicionales UD3</title>
</head>
<body>
    <h1>Ejercicio 5</h1>
    <h2>Script que muestre una lista de enlaces en función del perfil de usuario:
            - Perfil Administrador: Pagina1, Pagina2, Pagina3, Pagina4
            - Perfil Usuario: Pagina1, Pagina2
    </h2>
    <?php
    $perfil = "usuario";

    if ($perfil == "administrador") {
        echo "<a href='#'>Pagina1</a><br>";
        echo "<a href='#'>Pagina2</a><br>";
        echo "<a href='#'>Pagina3</a><br>";
        echo "<a href='#'>Pagina4</a>";
    } elseif ($perfil == "usuario") {
        echo "<a href='#'>Pagina1</a><br>";
        echo "<a href='#'>Pagina2</a>";
    }
    ?>
</body>
</html>