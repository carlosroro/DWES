<?php
$dniFormulario = empty($_POST['dni']) ? null : trim($_POST['dni']);
$nombreFormulario = empty($_POST['nombre']) ? null : trim($_POST['nombre']);
$apellidosFormulario = empty($_POST['apellidos']) ? null : trim($_POST['apellidos']);
$carnetFormulario = isset($_POST['carnet']) ? $_POST['carnet'] : null;
$paisFormulario = empty($_POST['pais']) ? null : $_POST['pais'];
$lenguajeFormulario = $_POST['lenguajes'] ?? null;

$errores = [];

if (is_null($dniFormulario) || empty($dniFormulario)) {
    $errores[] = "Debes introducir un DNI";
} else if (!preg_match('/^\d{8}[A-Z]$/', $dniFormulario)) {
     $errores[] = "El DNI no es válido.";
} 

if (is_null($nombreFormulario) || empty($nombreFormulario)) {
    $errores[] = "Debes introducir un nombre";
}
if (is_null($apellidosFormulario) || empty($apellidosFormulario)) {
    $errores[] = "Debes introducir los apellidos";
}

$paisPermitidos = [
    "es" => "España",
    "pt" => "Portugal",
    "fr" => "Francia"
];
$lenguajesPermitidos = [
    "js" => "Javascript",
    "php" => "PHP",
    "python" => "Python"
];

if (!array_key_exists($paisFormulario, $paisPermitidos)) {
    $errores[] = "País no válido";
}

if (!array_key_exists($lenguajeFormulario, $lenguajesPermitidos)) {
    $errores[] = "Lenguaje no válido";
}

if (!empty($errores)) {
    echo "Hay errores, no se puede continuar<br>";
    foreach ($errores as $error) {
        echo $error . "<br>";
    }
    exit;
}

echo "<h2>Currículum recibido</h2>";
echo "DNI: $dniFormulario<br>";
echo "Nombre: $nombreFormulario<br>";
echo "Apellidos: $apellidosFormulario<br>";
echo "Carnet: $carnetFormulario<br>";
echo "País: " . $paisPermitidos[$paisFormulario] . "<br>";
echo "Lenguaje: " . $lenguajesPermitidos[$lenguajeFormulario] . "<br>";

if ($_FILES['imagen']) {

    // $_FILES['archivos'] tiene estructura:
    // ['name'] => array de nombres
    // ['type'] => array de tipos MIME
    // ['tmp_name'] => array de rutas temporales
    // ['error'] => array de errores
    // ['size'] => array de tamaños

    $arrayImagenes = $_FILES['imagen'];

    for ($i = 0; $i < count($arrayImagenes['name']); $i++) {
        $nombre = $arrayImagenes['name'][$i];
        $tmpName = $arrayImagenes['tmp_name'][$i];
        $error = $arrayImagenes['error'][$i];


        if ($error === 0) {
            move_uploaded_file($tmpName, "images/$nombre");
            echo "Ha sido movido correctamente: ";
            echo "<img width=300 src='images/$nombre'>";
        } else {
            "Ha habido un error a la hora de selecionar los archivos.";
        }
    }
}

setcookie("dni", $dniFormulario, time() + 3600, "/");
echo "<br>";
echo "Cookie DNI: " . ($_COOKIE['dni'] ?? '');
?>