<?php
// Iniciar sesión
session_start();

// Inicializar variables
$errorNombre = "";
$errorEmail = "";
$errorTelefono = "";
$nombre ="";
$email = "";
$telefono = "";

if(!isset($_SESSION["contactos"])) {
    $_SESSION["contactos"] = array();
}

if(isset($_POST["enviar"])){
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $lProcesaDatos = true;

    if ($nombre == ""){
        $errorNombre = "Campo requerido";
        $lProcesaDatos = false;
    }

    if ($email == "" || (!filter_var($email, FILTER_VALIDATE_EMAIL))){
        $errorEmail = "Campo requerido";
        $lProcesaDatos = false;
    }

    if ($telefono == ""){
        $errorTelefono = "Campo requerido";
        $lProcesaDatos = false;
    }

    if ($lProcesaDatos){
        $_SESSION["contactos"][] = array(
            "nombre" => $nombre,
            "email" => $email,
            "telefono" => $telefono
        );
    } else{
        $nombre ="";
        $email = "";
        $telefono = "";
    }
}

$data = $_SESSION["contactos"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contactos</title>
</head>
    <body>
        <h1>Agenda</h1>
        <h2>Nuevo Contacto</h2>
        <form action="" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo $nombre?>">
            <?php echo $errorNombre;?>
            <br/>

            <label for="email">Email:</label>
            <input type="text" name="email" id="email" value="<?php echo $email?>">
            <?php echo $errorEmail;?>
            <br/>

            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" value="<?php echo $telefono?>">
            <?php echo $errorTelefono;?>
            <br/>

            <input type="submit" value="Guardar" name="enviar">
            <br>
            <button><a href="cerrarSesion1.php">Borrar contactos</a></button>
        </form>
        
        <h2>Contactos guardados</h2>
        <?php
            foreach($data as $clave => $valor){
                echo "Nombre: " . htmlspecialchars($valor["nombre"]) . " - " . "Email: " . htmlspecialchars($valor["email"]) . " - " . "Teléfono: " . htmlspecialchars($valor["telefono"]);
                echo "<br/>";
            }
        ?>
    </body>
</html>