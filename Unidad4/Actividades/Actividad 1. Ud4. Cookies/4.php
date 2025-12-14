<?php
$nombre_cookie = "contador";

// Si se pulsa el botón Reiniciar se pone el contador a 0
if (isset($_POST["reset"])) {
    setcookie($nombre_cookie, "", time() - 3600, "/");
    $contador = 0;
} else { // Sino se oncrementa el contador
    if (isset($_COOKIE[$nombre_cookie])) {
        $contador = (int)$_COOKIE[$nombre_cookie] + 1;
    } else {
        $contador = 1;
    }
    setcookie($nombre_cookie, $contador, time() + (86400 * 30), "/");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de visitas</title>
</head>
<body>
    <h1>Bienvenido!!!</h1>
    <p>Has visitado la página <strong><?php echo $contador;?></strong> veces.</p>
    <form method="POST" action="">
        <button type="submit" name="reset">Reiniciar contador</button>
    </form>
</body>
</html>