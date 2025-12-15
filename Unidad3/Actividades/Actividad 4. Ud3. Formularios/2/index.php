<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de formularios UD3</title>
</head>
<body>
    <h1>Ejercicio 2:</h1>
    <h2>
        Formulario para crear un currículum que incluya: Campos de texto, grupo de
        botones de opción, casilla de verificación, lista de selección única, lista de
        selección múltiple, botón de validación, botón de imagen, botón de reset, etc
    </h2>
    <form action="procesa.php" method="post" enctype="multipart/form-data">
        <!-- DNI -->
        <label for="dni">Introduzca DNI</label>
        <input id="dni" name="dni" placeholder="DNI">
        <br><br>
        <!-- Campo de texto para nombre -->
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        <br><br>
        <!-- Campo de texto para apellidos -->
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos">
        <br><br>
        <!-- Checkbox para carnet -->
        <label for="carnet">Carnet:</label>
        <input type="checkbox" name="carnet" id="carnet">
        <br><br>
        <!-- Múltiple selección para país -->
        <label for="pais">País:</label>
        <select name="pais" id="pais">
            <option value="" selected>Selecciona País:</option>
            <option value="es">España</option>
            <option value="pt">Portugal</option>
            <option value="fr">Francia</option>
        </select><br>
        <!-- Botones de opción para lenguajes -->
        <p>Seleccione un lenguaje, por favor:</p>
        <input type="radio" name="lenguajes" id="js" value="js" checked>
        <label for="js">JavaScript</label>

        <input type="radio" name="lenguajes" id="php" value="php">
        <label for="php">PHP</label>
        
        <input type="radio" name="lenguajes" id="python" value="python">
        <label for="python">Python</label>
        <br><br>
        <!-- Botón para imagen -->
        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen[]" id="imagen" multiple>
        <br><br>

        <!-- Botón de enviar -->
        <button type="submit">Enviar</button>
        <!-- Botón de reset -->
        <button type="reset">Limpiar</button>
    </form>
</body>
</html>