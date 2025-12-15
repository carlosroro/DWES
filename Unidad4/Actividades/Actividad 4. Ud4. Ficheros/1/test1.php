<?php
include("./config/conf.php");
include("./procesar_formulario.php");

$desglose = array();
$aUsers = array();
$nombreUsuario = "";

if (isset($_FILES["file"]) && is_uploaded_file($_FILES["file"]["tmp_name"])) {
    $filePath = $_FILES["file"]["tmp_name"];

    $file = fopen($filePath, "r");
    if (!$file) {
        die("Error al abrir el archivo.");
    }

    for ($i = 0; $i < LINECABECERA; $i++) {
        fgets($file);
    }

    while (!feof($file)) {
        $alum = fgets($file);
        if (!$alum) continue;

        $alumSt = str_replace($caracteres, $caracteresReemplazar, $alum);

        $alum_minus = strtolower($alumSt);

        $desglose = explode(" ", $alum_minus);

        if (count($desglose) >= 3) {
            $nombreUsuario = substr($desglose[0], 0, 2) . substr($desglose[1], 0, 2) . substr($desglose[2], 0, 2);

            $indice = 0;
            while (in_array($nombreUsuario, $aUsers)) {
                if (!in_array($nombreUsuario . ++$indice, $aUsers)) {
                    $nombreUsuario .= $indice;
                }
            }

            array_push($aUsers, $nombreUsuario);
        }
    }
    fclose($file);

    $contenido;

    if ($sistema == "Linux") {
        $file = fopen("./Usuarios.sh", "w");
        foreach ($aUsers as $clave) {
            $contenido = "sudo groupadd $clave\nsudo useradd -m -g $clave -s /bin/bash $clave\n";
            fwrite($file, $contenido);
        }
        fclose($file);
    } else {
        $file = fopen("./Usuarios.sql", "w");
        foreach ($aUsers as $clave) {
            $contenido = "CREATE USER '$clave'@'localhost' IDENTIFIED BY '$clave';\n";
            fwrite($file, $contenido);
        }
        fclose($file);
    }
} else {
    die("No se ha subido ningún archivo o el archivo no es válido.");
}
?>