<?php
// Inicializar las variables de nombre de usuario y contraseña
$username = "";
$password = "";

// Crear las cookies
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["remember"])) {
        setcookie("username", $_POST["username"], time() + (86400 * 30), "/");
        setcookie("password", $_POST["password"], time() + (86400 * 30), "/");
    } elseif (isset($_POST["delete"])) {
        setcookie("username", "", time() - 3600, "/");
        setcookie("password", "", time() - 3600, "/");
        $username = $password = "";
    }
}

// Si existe la cookie de nombre de usuario guardarla en su variable
if (isset($_COOKIE["username"])) {
    $username = $_COOKIE["username"];
}
// Si existe la cookie de contraseña se hace lo mismo
if (isset($_COOKIE["password"])) {
    $password = $_COOKIE["password"];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario de Login</h1>
    <form method="POST" action="">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username);?>" required>
        <br><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($password);?>" required>
        <br><br>

        <label for="remember">Recordar mis datos</label>
        <input type="checkbox" id="remember" name="remember">
        <br><br>

        <button type="submit">Iniciar sesión</button>
        <button type="submit" name="delete">Borrar datos</button>
    </form>
</body>
</html>