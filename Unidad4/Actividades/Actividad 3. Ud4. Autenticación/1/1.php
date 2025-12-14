<?php
// Archivo conf
require_once "./config/conf.php";

// Inicializar variables
$auth = false;
$usuario = "";
$password = "";
$error = "";

// Iniciar sesión
session_start();

if (isset($_SESSION["usuario"])) {
    $auth = true;
}

if (isset($_POST["enviar"])) {
    $usuario = clearData($_POST["usuario"]);
    $password = clearData($_POST["password"]);

    foreach ($users as $valor => $user) {
        if ($usuario === $user[0] && $password === $user[1]) {
            $auth = true;
            $_SESSION["usuario"] = $usuario;
            $_SESSION["hora_inicio"] = date("H:i:s");
            break;
        }
    }

    if (!$auth) {
        $error = "Credenciales incorrectas";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Autenticación</title>
</head>
<body>
    <h1>Ejercicio 1 - Autenticación</h1>
    <?php 
        if (!$auth) {
    ?>
    <form method="POST" action="">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario">

        <label for="password">Contraseña</label>
        <input type="password" name="password">

        <input type="submit" name="enviar" value="Iniciar sesión">
        <p style="color:red;"><?php echo $error;?></p>
    </form>

    <?php
        } else {
            echo "<h2>Bienvenido " . $_SESSION["usuario"] . "</h2>";
            echo "<p>Hora de inicio de sesión: " . $_SESSION["hora_inicio"] . "</p>";
    ?>
        <h3>Zona privada</h3>
        <p>Estás en la zona privada.</p>
    <?php
        }
    ?>

    <h3>Zona pública</h3>
    <p>Estás en la zona pública.</p>
    <?php
        if ($auth) {
            echo "<a href='./config/cerrarSesion.php'>Cerrar sesión</a>";
        }
    ?>
</body>
</html>