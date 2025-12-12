<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de arrays UD3</title>
    <style>
        img {
            height: 70px;
            width: 100px;
        }
    </style>
</head>

<body>
    <h1>Ejercicio 1:</h1>
    <h2>Definir un array que permita almacenar y mostrar la siguiente información:
        <br>a. Meses del año.
        <br>b. Tablero para jugar al juego de los barcos.
        <br>c. Nota de los alumnos de 2º DAW para el módulo DWES.
        <br>d. Verbos irregulares en inglés.
        <br>e. Información sobre continentes, países, capitales y banderas.
    </h2>
    <?php
    // Meses del año
    echo "<h3>MESES DEL AÑO:</h3>";
    $meses = [
        1 => "enero",
        2 => "febrero",
        3 => "marzo",
        4 => "abril",
        5 => "mayo",
        6 => "junio",
        7 => "julio",
        8 => "agosto",
        9 => "septiembre",
        10 => "octubre",
        11 => "noviembre",
        12 => "diciembre"
    ];

    foreach ($meses as $clave => $valor) {
        echo "$clave - $valor<br>";
    }

    // Tablero barcos
    echo "<h3>TABLERO BARCOS:</h3>";
    $tablero = [
        ['~', '~', '~'],
        ['~', 'B', '~'],
        ['~', '~', '~']
    ];

    foreach ($tablero as $fila) {
        echo implode(' ', $fila) . "\n";
    }

    // Notas alumnos
    echo "<h3>NOTAS ALUMNOS:</h3>";
    $notas = [
        "Manuel López" => ["DWES" => 5, "DWEC" => 6, "DIWEB" => 8],
        "Ana Martínez" => ["DWES" => 4, "DWEC" => 5, "DIWEB" => 5],
        "María Sánchez" => ["DWES" => 8, "DWEC" => 7, "DIWEB" => 9]
    ];

    foreach ($notas as $nombre => $modulos) {
        echo "<strong>$nombre:</strong><br>";
        foreach ($modulos as $asignatura => $calificacion) {
            echo "En la asignatura {$asignatura} tiene un {$calificacion}<br>";
        }
    }

    // Verbos inglés
    echo "<h3>VERBOS INGLÉS:</h3>";
    $verbos = [
        "Comer" => [
            "Infinitivo" => "eat",
            "Pretérito" => "ate",
            "Participio" => "eaten"
        ],
        "Conducir" => [
            "Infinitivo" => "drive",
            "Pretérito" => "drove",
            "Participio" => "driven"
        ],
        "Dormir" => [
            "Infinitivo" => "sleep",
            "Pretérito" => "slept",
            "Participio" => "slept"
        ],
        "Hablar" => [
            "Infinitivo" => "speak",
            "Pretérito" => "spoke",
            "Participio" => "spoken"
        ]
    ];

    foreach ($verbos as $verboCastellano => $formasIngles) {
        echo "<h3>$verboCastellano:</h3>";
        foreach ($formasIngles as $forma => $formaVerbo) {
            echo "<strong>$forma:</strong> $formaVerbo<br>";
        }
    }

    // Geografía
    echo "<h3>GEOGRAFÍA:</h3>";
    $geografia = [
        "América" => [
            [
                "País" => "EEUU",
                "Capital" => "Washington",
                "Bandera" => "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/2560px-Flag_of_the_United_States.svg.png'>"
            ],
            [
                "País" => "Cuba",
                "Capital" => "La Habana",
                "Bandera" => "<img src='https://upload.wikimedia.org/wikipedia/commons/b/bd/Flag_of_Cuba.svg'>"
            ]
        ],
        "Europa" => [
            [
                "País" =>
                "Portugal",
                "Capital" => "Lisboa",
                "Bandera" => "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Portugal.svg/2560px-Flag_of_Portugal.svg.png'>"
            ],
            [
                "País" => "Rusia",
                "Capital" => "Moscú",
                "Bandera" => "<img src='https://upload.wikimedia.org/wikipedia/commons/f/f3/Flag_of_Russia.svg'>"
            ]
        ],
        "Asia" => [
            [
                "País" => "Palestina",
                "Capital" => "Jerusalem",
                "Bandera" => "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Flag_of_Palestine.svg/1200px-Flag_of_Palestine.svg.png'>"
            ],
            [
                "País" => "Líbano",
                "Capital" => "Beirut",
                "Bandera" => "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Flag_of_Lebanon.svg/1200px-Flag_of_Lebanon.svg.png'>"
            ]
        ],
        "África" => [
            [
                "País" => "Angola",
                "Capital" => "Luanda",
                "Bandera" => "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Flag_of_Angola.svg/1200px-Flag_of_Angola.svg.png'>"
            ],
            [
                "País" => "Argelia",
                "Capital" => "Argel",
                "Bandera" => "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Flag_of_Algeria.svg/2560px-Flag_of_Algeria.svg.png'>"
            ]
        ],
        "Oceanía" => [
            [
                "País" => "Australia",
                "Capital" => "Canberra",
                "Bandera" => "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Flag_of_Australia_%28converted%29.svg/1200px-Flag_of_Australia_%28converted%29.svg.png'>"
            ],
            [
                "País" => "Nueva Zelanda",
                "Capital" => "Wellington",
                "Bandera" => "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Flag_of_New_Zealand.svg/960px-Flag_of_New_Zealand.svg.png'>"
            ]
        ]
    ];

    foreach ($geografia as $continente => $paises) {
        echo "<h2>$continente</h2>";
        foreach ($paises as $descripcion) {
            echo "<strong>País:</strong> {$descripcion["País"]}<br>";
            echo "<strong>Capital:</strong> {$descripcion["Capital"]}<br>";
            echo "<strong>Bandera:</strong> {$descripcion["Bandera"]}<br><br>";
        }
    }
    ?>
</body>
</html>