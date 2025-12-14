<?php
require_once "./config/conf.php";

$auth = false;
$error = "";

session_start();

if (isset($_SESSION["usuario"])) {
    $auth = true;
}

if (isset($_POST["enviar"])) {
    $usuario = clearData($_POST["usuario"]);
    $password = clearData($_POST["password"]);

    foreach ($users as $user) {
        if ($usuario === $user[0] && $password === $user[1]) {
            $auth = true;
            $_SESSION["usuario"] = $usuario;
            $_SESSION["perfil"] = $user[2];
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
    <title>Autenticación con perfiles</title>
</head>
<body>
    <h1>Ejercicio 2 - Autenticación con perfiles</h1>
    <?php if (!$auth) { ?>
        <form method="POST" action="">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario">

            <label for="password">Contraseña</label>
            <input type="password" name="password">

            <input type="submit" name="enviar" value="Iniciar sesión">
            <p style="color:red;"><?php echo $error;?></p>
        </form>
    <?php } else { ?>
        <h2>Bienvenido <?php echo $_SESSION["usuario"]; ?></h2>
        <p>Perfil: <?php echo $_SESSION["perfil"]; ?></p>
        <p>Hora de inicio de sesión: <?php echo $_SESSION["hora_inicio"]; ?></p>

        <h3>Zona privada</h3>
        <p>Estás en la zona privada.</p>

        <?php if ($_SESSION["perfil"] === "admin") { ?>
            <p>Contenido exclusivo para administradores.</p>
        <?php } elseif ($_SESSION["perfil"] === "alumno") { ?>
            <p>Contenido exclusivo para alumnos.</p>
        <?php } else { ?>
            <p>Contenido para usuarios generales.</p>
        <?php } ?>

        <a href="./config/cerrarSesion.php">Cerrar sesión</a>
    <?php } ?>

    <h3>Zona pública</h3>
    <p>Estás en la zona pública.</p>
</body>
</html>