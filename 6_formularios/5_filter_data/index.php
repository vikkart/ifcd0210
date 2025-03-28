<?php

/**
 * 
 * Completar el siguiente programa para que realice lo siguiente:
 *  -  siempre muestra un listado de películas
 *  - si recibe por URL un parámetro "selected" con un número, debajo de la lista 
 * 
 */

$sci_fi_movies = [
    "Gatacca",
    "Dune",
    "The substance",
    "Ex Machina",
    "The matrix",
    "Interestellar"
];


function showMovies($movies)
{
    echo "<ul>";
    foreach ($movies as $key => $value) {
        echo "<li class= '".highlightSelected($key)."'>$value</li>";
    }
    echo "</ul>";
}

function showSelected($array_pelis)
{
    /* global $sci_fi_movies */

    // comprobar si existe "selected"
/*     if (isset($_GET["selected"])) {
        echo "ahi ta"; 
    } */

    // si existe, mostrar un párrafo con la película seleccionada
    /* if (isset($_GET["selected"])) {
        echo $array_pelis[$_GET["selected"]]; 
    } */
    // si no, mostrar "no hay seleccionada ninguna película"
    if (isset($_GET["selected"])) {
        echo $array_pelis[$_GET["selected"]]; 
    }else {
        echo "No hay seleccionada ninguna película.";
    }
}

function highlightSelected($movie)
{
    //opcional: (🌶️ spicy)
    // - funcion que recibe una película, la compara con la "selected" y, si coincide, añade la clase "highlight" al <li> correspondiente
    // - es necesario utilizar la función dentro del foreach de la funcion showMovies
   /*  if (isset($_GET["selected"])) {
       
    } */
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5_filter_data</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>SciFi Movies</h1>

    <?php showMovies($sci_fi_movies); ?>

    <?php showSelected($sci_fi_movies); ?>

</body>

</html>