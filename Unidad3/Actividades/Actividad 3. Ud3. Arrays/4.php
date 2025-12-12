<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de arrays UD3</title>
    <style>
        img {
            height: 100px;
            width: 100px;
        }
    </style>
</head>
<body>
    <h1>Ejercicio 4:</h1>
    <h2>Un restaurante dispone de una carta de 3 primeros, 5 segundos y 3 postres.
        Almacenar información incluyendo foto y mostrar los menús disponibles. Mostrar el
        precio del menú suponiendo que éste se calcula sumando el precio de cada uno de
        los platos incluidos y con un descuento del 20 %.</h2>
    <?php
    $carta = [
        "Primeros" => [
            [
                "Nombre" => "Ensalada de queso de cabra",
                "Precio" => 8.50,
                "Foto" => "<img src='https://valledearas.com/wordpress/wp-content/uploads/2022/11/ensalada-de-queso-de-cabra-y-nueces.jpg'>"
            ],
            [
                "Nombre" => "Crema de calabaza",
                "Precio" => 7.00,
                "Foto" => "<img src='https://comedelahuerta.com/wp-content/uploads/2020/10/crema-de-calabaza-1.jpg'>"
            ],
            [
                "Nombre" => "Gazpacho andaluz",
                "Precio" => 6.50,
                "Foto" => "<img src='https://cdn.recetasderechupete.com/wp-content/uploads/2020/05/Gazpacho-andaluz-Ajustes-de-rechupete-2.jpg'>"
            ]
        ],
        "Segundos" => [
            [
                "Nombre" => "Solomillo de cerdo",
                "Precio" => 13.50,
                "Foto" => "<img src='https://recetasdecocina.elmundo.es/wp-content/uploads/2024/02/receta-de-solomillo-de-cerdo-al-ajillo-1024x657.jpg'>"
            ],
            [
                "Nombre" => "Lubina al horno",
                "Precio" => 15.00,
                "Foto" => "<img src='https://content-cocina.lecturas.com/medio/2025/09/18/lubina-al-horno_00000000_5ae9bfb1_250918135630_1200x1600.webp'>"
            ],
            [
                "Nombre" => "Pollo al curry",
                "Precio" => 12.00,
                "Foto" => "<img src='https://d36fw6y2wq3bat.cloudfront.net/recipes/pollo-al-curry-con-col-rizada/900/pollo-al-curry-con-col-rizada_version_1698724941.jpg'>"
            ],
            [
                "Nombre" => "Risotto de setas",
                "Precio" => 11.50,
                "Foto" => "<img src='https://imag.bonviveur.com/risotto-de-setas.jpg'>"
            ],
            [
                "Nombre" => "Hamburguesa de ternera",
                "Precio" => 10.50,
                "Foto" => "<img src='https://cdn.recetasderechupete.com/wp-content/uploads/2015/03/hamburguesa_ternera_cebolla.jpg'>"
            ]
        ],
        "Postres" => [
            [
                "Nombre" => "Tarta de queso",
                "Precio" => 5.50,
                "Foto" => "<img src='https://recetasdecocina.elmundo.es/wp-content/uploads/2022/11/tarta-queso-horno-receta.jpg'>"
            ],
            [
                "Nombre" => "Coulant de chocolate",
                "Precio" => 6.00,
                "Foto" => "<img src='https://images.aws.nestle.recipes/original/2024_10_23T08_38_35_badun_images.badun.es_3d5646918d33_coulant_de_chocolate_negro.jpg'>"
            ],
            [
                "Nombre" => "Fruta de temporada",
                "Precio" => 4.50,
                "Foto" => "<img src='https://menu.tipsipro.com/media/uploads/la_estacion_ayres_hotel_sevilla_restaurante_carta__foodyt-0.jpg'>"
            ]
        ]
    ];

    foreach ($carta as $orden => $platos) {
        echo "<h3>$orden:</h3>";
        foreach ($platos as $plato) {
            foreach ($plato as $clave => $valor) {
                echo "<strong>$clave:</strong> $valor<br>";
            }
            echo "<br>";
        }
    }
    ?>
</body>
</html>