
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach</title>
    <link rel="stylesheet" type="text/css" href="/ifcd0210/estilo.css">
    
</head>
<body>
<?php
    //Dado el siguiente array, hacer una lista de la compra

    $compra = ['lechuga', 'yogures', 'arroz'];
    
    echo "<h3>Lista de la compra</h3><ul>";
    foreach ($compra as $producto) {
        echo "<li>
        <input type='checkbox' id='item-$producto' />
        <label for='item-$producto'>$producto</label>
        </li>";
    }  
    echo "</ul>";


?>
</body>
</html>