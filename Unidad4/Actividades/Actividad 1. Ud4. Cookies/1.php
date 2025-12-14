<?php
// Crear cookie
if (isset($_POST["accion"]) && $_POST["accion"] === "crear") {
    setcookie("cookie1", "Hola Mundo", time() + 60);
    echo "Cookie creada con éxito.<br/>";
}

// Comprobar la cookie
if (isset($_COOKIE["cookie1"])) {
    echo "Estado actual de la cookie: " . $_COOKIE["cookie1"] . "<br/>";
} else {
    echo "No existe cookie.<br/>";
}

// Borrar la cookie
if (isset($_POST["accion"]) && $_POST["accion"] === "borrar") {
    setcookie("cookie1", "", time() - 60);
    echo "Cookie borrada.<br/>";
}
?>

<!-- Botones de formulario -->
<form method="post">
    <input type="submit" name="accion" value="crear">
    <input type="submit" name="accion" value="borrar">
    <input type="submit" name="accion" value="estado">
</form>