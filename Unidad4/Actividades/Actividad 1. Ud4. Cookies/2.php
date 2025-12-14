<?php
// Crear cookie
setcookie("prueba", "ok", time() + 30);

// Comprobar si existe la cookie 
if (isset($_COOKIE["prueba"])) {
    $mensaje = "Tu navegador permite cookies.";
} else {
    $mensaje = "Tu navegador NO permite cookies.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobar cookie</title>
</head>
<body>
    <h2><?php echo $mensaje;?></h2>
</body>
</html>