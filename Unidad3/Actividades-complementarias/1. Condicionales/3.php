<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades complementarias de condicionales UD3</title>
</head>
<body>
    <h1>Actividad 3:</h1>
    <h2>Clasificación por edades:
        • Escribe un programa que clasifique a una persona según su edad: "niño",
        "adolescente", "adulto" o "anciano".
    </h2>
    <?php
    $edad = 65;

    if ($edad >= 0 && $edad <= 14) {
        echo "Eres un niño";
    } elseif ($edad > 14 && $edad <= 17) {
        echo "Eres adolescente";
    } elseif ($edad >= 18 && $edad < 65) {
        echo "Eres adulto";
    } elseif ($edad >= 65) {
        echo "Eres anciano";
    }
    ?>
</body>
</html>