<?php
// Array con los usuarios
$users = [
    ["usuario", "1234", "usuario"],
    ["admin", "12345", "admin"],
    ["alumno", "hola1234", "alumno"]
];

// Función para limpiar datos
function clearData($cadena) {
    $cadena = trim($cadena);
    $cadena = stripslashes($cadena);
    $cadena = htmlspecialchars($cadena);
    return $cadena;
}
?>