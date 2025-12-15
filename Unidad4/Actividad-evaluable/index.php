<?php
// Iniciar sesión
session_start();

// Array de películas por género
$peliculas = [
    "Acción" => [
        ["titulo" => "Mad Max: Fury Road", "anio" => 2015, "imagen" => "https://image.tmdb.org/t/p/w500/8tZYtuWezp8JbcsvHYO0O46tFbo.jpg"],
        ["titulo" => "John Wick", "anio" => 2014, "imagen" => "https://upload.wikimedia.org/wikipedia/en/9/98/John_Wick_TeaserPoster.jpg"]
    ],
    "Comedia" => [
        ["titulo" => "Superbad", "anio" => 2007, "imagen" => "https://upload.wikimedia.org/wikipedia/en/8/8b/Superbad_Poster.png"],
        ["titulo" => "The Hangover", "anio" => 2009, "imagen" => "https://upload.wikimedia.org/wikipedia/en/b/b9/Hangoverposter09.jpg"]
    ],
    "Drama" => [
        ["titulo" => "The Pursuit of Happyness", "anio" => 2006, "imagen" => "https://upload.wikimedia.org/wikipedia/en/8/81/Poster-pursuithappyness.jpg"],
        ["titulo" => "Joker", "anio" => 2019, "imagen" => "https://upload.wikimedia.org/wikipedia/en/e/e1/Joker_%282019_film%29_poster.jpg"]
    ]
];

if (isset($_POST["preferencias"])) {
    $_SESSION["preferencias"] = $_POST["preferencias"];
}

$preferencias = $_SESSION["preferencias"] ?? [];

// Año actual
$anioActual = date("Y");

// Función para mostrar películas
function mostrarPeliculas($lista) {
    foreach ($lista as $p) {
        echo "<div style='margin:10px; display:inline-block; text-align:center;'>";
        echo "<img src='{$p['imagen']}' width='150'><br>";
        echo "<strong>{$p['titulo']}</strong><br>";
        echo "Año: {$p['anio']}<br>";
        echo "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de películas</title>
</head>
<body>
    <h1>Aplicación de películas</h1>

    <h2>Menú de géneros</h2>
    <ul>
        <?php foreach ($peliculas as $genero => $lista):?>
            <li><a href="?genero=<?php echo urlencode($genero);?>"><?php echo $genero;?></a></li>
        <?php endforeach;?>
    </ul>

    <h2>Selecciona tus preferencias</h2>
    <form method="post">
        <?php foreach ($peliculas as $genero => $lista):?>
            <label>
                <input type="checkbox" name="preferencias[]" value="<?php echo $genero;?>"
                    <?php echo in_array($genero, $preferencias) ? "checked" : "";?>>
                <?php echo $genero;?>
            </label><br>
        <?php endforeach;?>
        <input type="submit" value="Guardar preferencias">
    </form>

    <hr>

    <h2>Películas</h2>
    <?php
    if (isset($_GET["genero"]) && isset($peliculas[$_GET["genero"]])) {
        mostrarPeliculas($peliculas[$_GET["genero"]]);
    } elseif (!empty($preferencias)) {
        foreach ($preferencias as $pref) {
            echo "<h3>$pref</h3>";
            mostrarPeliculas($peliculas[$pref]);
        }
    } else {
        echo "<h3>Películas del año $anioActual</h3>";
        foreach ($peliculas as $genero => $lista) {
            foreach ($lista as $p) {
                if ($p["anio"] == $anioActual) {
                    mostrarPeliculas([$p]);
                }
            }
        }
    }
    ?>
</body>
</html>