<?php
$resultado = 0;

if (isset($_POST["sumar"])) {
    $cantidad = $_POST["cantidad"];

    for ($i = 1; $i <= $cantidad; $i++) {
        if (isset($_POST["numero$i"])) {
            $resultado += $_POST["numero$i"];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de formularios UD3</title>
</head>
<body>
    <h1>Ejercicio 4:</h1>
    <h2>
        Crear un script para sumar una serie de números. El número de números a sumar
        será introducido en un formulario.
    </h2>
    <?php
    if (!isset($_POST["cantidad"]) || isset($_POST["sumar"])) {
    ?>
        <form action="" method="post">
            <label for="cantidad">¿Cuántos números quieres sumar?</label>
            <input type="number" id="cantidad" name="cantidad" min="1" required>
            <br><br>

            <button type="submit">Siguiente</button>
        </form>
    <?php
    }
    ?>

    <?php
    if (isset($_POST["cantidad"]) && !isset($_POST["sumar"])) {
    ?>
        <h3>Introduce los números:</h3>
        <form action="" method="post">
            <?php
            $cantidad = $_POST["cantidad"];
            for ($i = 1; $i <= $cantidad; $i++) {
                echo "<label for='numero$i'>Número $i:</label>";
                echo "<input type='number' id='numero$i' name='numero$i' required><br><br>";
            }
            ?>
            <input type="hidden" name="cantidad" value="<?php echo $cantidad;?>">
            <button type="submit" name="sumar">Sumar</button>
        </form>
    <?php
    }
    ?>

    <?php
    if (isset($_POST["sumar"])) {
    ?>
        <h3>El resultado de la suma es: <?php echo $resultado;?></h3>
    <?php
    }
    ?>
</body>
</html>