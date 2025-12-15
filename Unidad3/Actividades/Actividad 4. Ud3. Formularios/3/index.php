<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de formularios UD3</title>
</head>
<body>
    <h1>Ejercicio 3:</h1>
    <h2>
        Crear una aplicación que almacene información de países: nombre, capital y
        bandera. Diseñar un formulario que permita seleccionar un país y nos muestre el
        nombre de la capital y la bandera.
    </h2>
    <form action="procesa.php" method="post">
        <label for="pais">País:</label>
        <select name="pais" id="pais">
            <option value="Portugal">Portugal</option>
            <option value="Alemania">Alemania</option>
            <option value="Italia">Italia</option>
        </select>
        <br><br>
        <!-- Botón enviar -->
        <input type="submit" value="Enviar">
        <!-- Botón limpiar -->
        <input type="reset" value="Limpiar">
    </form>
</body>
</html>