<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"] ?? "");
    $apellidos = htmlspecialchars($_POST["apellidos"] ?? "");
    $genero = htmlspecialchars($_POST["genero"] ?? "");
    $contraseña = htmlspecialchars($_POST["contraseña"] ?? "");
    $edad = htmlspecialchars($_POST["edad"] ?? "");
    $email = htmlspecialchars($_POST["email"] ?? "");
    $mensaje = htmlspecialchars($_POST["mensaje"] ?? "");

    $carnet = $_POST["carnet"] ?? [];
    $lenguajes = $_POST["lenguajes"] ?? [];

    echo "<h2>Datos recibidos:</h2>";
    echo "Nombre: $nombre $apellidos<br>";
    echo "Género: $genero<br>";
    echo "Contraseña: $contraseña<br>";
    echo "Edad: $edad<br>";
    echo "Email: $email<br>";

    echo "Carnet: ";
    if (!empty($carnet)) {
        foreach ($carnet as $valorCarnet) {
            echo htmlspecialchars($valorCarnet) . " ";
        }
    } else {
        echo "Ninguno";
    }
    echo "<br>";

    echo "Lenguajes: ";
    if (!empty($lenguajes)) {
        foreach ($lenguajes as $valorLenguajes) {
            echo htmlspecialchars($valorLenguajes) . " ";
        }
    } else {
        echo "Ninguno";
    }
    echo "<br>";

    echo "Mensaje: $mensaje<br>";
}
?>