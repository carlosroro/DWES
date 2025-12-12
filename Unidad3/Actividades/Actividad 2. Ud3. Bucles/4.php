<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de bucles UD3</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #c0bcbcff;
            padding: 8px;
            text-align: center;
        }
        thead {
            background-color: #f7efefff;
        }
    </style>
</head>
<body>
    <h1>Ejercicio 4:</h1>
    <h2>Mostrar paleta de colores. Utilizar una tabla que muestre el color y el valor
        hexadecimal que le corresponde. Cada celda será un enlace a una página que
        mostrará un fondo de pantalla con el color seleccionado. ¿Puedes hacerlo con los
        conocimientos que tienes?
    </h2>
    <table>
        <thead>
            <tr>
                <th>Color</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $arrayColores = [
                    "Verde" => "008000",
                    "Amarillo" => "FFFF00",
                    "Rojo" => "FF0000",
                    "Azul" => "0000FF",
                    "Naranja" => "FFA500",
                    "Negro" => "000000",
                    "Rosa" => "FFC0CB"
                ];

                foreach ($arrayColores as $color => $hexadecimal) {
                    $enlace = "https://www.google.com/search?client=firefox-b-d&channel=entpr&q=%23" . $hexadecimal;
                    echo "<tr>";
                    echo "<td>$color</td>";
                    echo "<td><a href='$enlace'>#$hexadecimal</a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>