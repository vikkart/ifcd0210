<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach 2.0</title>
    <link rel="stylesheet" type="text/css" href="/ifcd0210/estilo.css">
<body>
    <?php
    $compra = [
        [
            "nombre" => "Manzanas",
            "precio" => 1.5
        ],
        [
            "nombre" => "Plátanos",
            "precio" => 0.8
        ],
        [
            "nombre" => "Leche",
            "precio" => 1.2
        ],
        [
            "nombre" => "Pan",
            "precio" => 1.0
        ],
        [
            "nombre" => "Huevos",
            "precio" => 2.5
        ],
        [
            "nombre" => "Queso",
            "precio" => 3.0
        ],
    ];
    echo "<ul>";
    foreach ($compra as $producto) {
        echo "<li>" . $producto['nombre'] . "<br>" . $producto['precio'].  "€</li>";
    }
    //tengo que decir que valor seleccion en el array 

    /* 
    
     echo "<li>$producto[nombre]"</li>";
    sin comillas!!
    */
    echo "</ul>";
    ?>
</body>
</html>