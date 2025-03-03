<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelis</title>
    <link rel="stylesheet" type="text/css" href="/ifcd0210/estilo.css">

</head>
<body>
<?php
/* 
    Crear un objeto(array asociativo) que represente una película. 
    Para ello ha de tener lo siguientes campos:
        - titulo
        - año
        - director
        - genero


    Una vez creado un objeto, intentar crear un array con 3 películas, 
    iterarlas para mostrarlas en 3 divs html con sus correspondientes atributos
*/
$peli = [ 
    "titulo",
    "año",
    "director",
    "genero",
];

$avatar = [
    $peli[0] => "avatar",
    $peli[1] => 2009,
    $peli[2] => "James Cameron",
    $peli[3] => "Sci-Fi",
];

$alien = [
    $peli[0] => "Alien, el octavo pasajero",
    $peli[1] => 1979,
    $peli[2] => "Ridley Scott",
    $peli[3] => "Sci-Fi",
];

$gigante_hierro = [
    $peli[0] => "El gigante de hierro",
    $peli[1] =>  1999,
    $peli[2] => "	Brad Bird",
    $peli[3] => "Animacion",
];

$peliculas = [
    [
        "titulo" => "avatar",
        "año" => 2009,
        "director" => "James Cameron",
        "genero" => "Sci-Fi",
    ],
    [
        "titulo" => "Alien, el octavo pasajero",
        "año" => 1979,
        "director" => "Ridley Scott",
        "genero" => "Sci-Fi",
    ],
    [
        "titulo" => "El gigante de hierro",
        "año" => 1999,
        "director" => "Brad Bird",
        "genero" => "Animacion",
    ],
];

foreach ($peliculas as $peli) {
    echo "<div>";
    echo "<h2>" . $peli['titulo'] . "</h2>";
    echo "<p>Año: " . $peli['año'] . "</p>";
    echo "<p>Director: " . $peli['director'] . "</p>";
    echo "<p>Género: " . $peli['genero'] . "</p>";
    echo "</div>";
}
?>
<pre>
   <?php
print_r($avatar);
echo"<br>";
print_r($alien);
echo"<br>";
print_r($gigante_hierro);
?>
</pre>
<!-- <div>
    <?php
    $peliculas = [$avatar, $alien, $gigante_hierro];

    foreach ($peliculas as $peli) {
        echo "<div>";
        echo "<h2>" . $peli['titulo'] . "</h2>";
        echo "<p>Año: " . $peli['año'] . "</p>";
        echo "<p>Director: " . $peli['director'] . "</p>";
        echo "<p>Género: " . $peli['genero'] . "</p>";
        echo "</div>";
    }
    ?> -->
</div>
</body>
</html>