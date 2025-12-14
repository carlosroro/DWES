<?php
// Iniciar sesión
session_start();

// Array con los puzzles
$puzzles = [
    ["piezas/1.jpg", "piezas/a.jpg"],
    ["piezas/2.jpg", "piezas/b.jpg"],
    ["piezas/3.jpg", "piezas/c.jpg"],
    ["piezas/4.jpg", "piezas/d.jpg"],
    ["piezas/5.jpg", "piezas/e.jpg"],
    ["piezas/6.jpg", "piezas/f.jpg"]
];

if (!isset($_SESSION["indice1"])) {
    $_SESSION["indice1"] = 0;
    $_SESSION["indice2"] = 0;
    $_SESSION["intentos"] = 0;
    $_SESSION["aciertos"] = 0;
}

$resolucion = "Pulsa en las imágenes para cambiarlas.";

if (isset($_POST["imagen1"])) {
    $_SESSION["indice1"] = ($_SESSION["indice1"] + 1) % count($puzzles);
}
if (isset($_POST["imagen2"])) {
    $_SESSION["indice2"] = ($_SESSION["indice2"] + 1) % count($puzzles);
}
if (isset($_POST["resolver"])) {
    $_SESSION["intentos"]++;
    if ($_SESSION["indice1"] == $_SESSION["indice2"]) {
        $resolucion = "Correcto!";
        $_SESSION["aciertos"]++;
    } else {
        $resolucion = "No coincide.";
    }
}

$indice_actual1 = $_SESSION["indice1"];
$indice_actual2 = $_SESSION["indice2"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puzzle infantil</title>
</head>
<body>
    <h1>Puzzle infantil</h1>
    <form method="post">
        <button name="imagen1"><img src="<?php echo $puzzles[$indice_actual1][0];?>" width="100"></button><br>
        <button name="imagen2"><img src="<?php echo $puzzles[$indice_actual2][1];?>" width="100"></button><br>
        <input type="submit" name="resolver" value="Resolver">
    </form>
    <p><?php echo $resolucion;?></p>
    <p>Aciertos: <?php echo $_SESSION["aciertos"];?> | Intentos: <?php echo $_SESSION["intentos"];?></p>
    <button><a href="cerrarSesion2.php">Cerrar sesión</a></button>
</body>
</html>