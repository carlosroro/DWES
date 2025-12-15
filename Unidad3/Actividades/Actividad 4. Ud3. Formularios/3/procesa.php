<?php
$paises = [
    "Portugal" => [
        "capital" => "Lisboa",
        "bandera" => "<img src='https://upload.wikimedia.org/wikipedia/commons/5/5c/Flag_of_Portugal.svg'>"
    ],
    "Alemania" => [
        "capital" => "Berlin",
        "bandera" => "<img src='https://upload.wikimedia.org/wikipedia/en/b/ba/Flag_of_Germany.svg'>"
    ],
    "Italia" => [
        "capital" => "Roma",
        "bandera" => "<img src='https://upload.wikimedia.org/wikipedia/commons/0/03/Flag_of_Italy.svg'>"
    ]
];

if (!empty($_POST['pais'])) {
    $pais = $_POST['pais'];
    if (isset($paises[$pais])) {
        echo "Capital:" . $paises[$pais]["capital"] . "<br>";
        echo "Bandera: " . $paises[$pais]["bandera"];
    }
}
?>