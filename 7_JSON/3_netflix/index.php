<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/ifcd0210/estilo.css">
</head>
<body>
    
</body>
</html>

<?php

// leer pelis.json
file_get_contents("pelis.json");
$pelisarray = file_get_contents("pelis.json");
//convertir pelis.json a array
var_dump($pelisarray);
$pelis = json_decode($pelisarray, true);
echo '<pre>' . print_r($pelis, true) . '</pre>';
//iterar y mostrar dicho array


echo "<table>";
echo "<tr>";
echo "<td>Título</td>";
echo "<td>Director</td>";
echo "<td>Género</td>";
echo "</tr>";
echo "<tr>";
foreach ($pelis as $pelis) {
    echo "<tr>";
    echo "<td>" . $pelis['titulo'] . "</td>";
    echo "<td>" . $pelis['director'] . "</td>";
    foreach ($pelis['genero'] as $key => $genero) {
        echo "<td>" . "$genero " . "</td>";
    }
    //echo "<td>" . implode(", ", $pelis['genero']) . "</td>";
    echo "</tr>";
    //implode(", ", $pelicula['genero']): Une los géneros en una sola línea con comas.
}
echo "</tr>";
echo "</table>";
?>
