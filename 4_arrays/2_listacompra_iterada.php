<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de la compra</title>
    <link rel="stylesheet" type="text/css" href="/ifcd0210/estilo.css">
</head>
<body>
    <?php
/* Usando el mismo array del ejercicio anterior, iterarlo con un bucle for y hacer un echo con el contenido del array.
    opcional: hacer lo mismo con un foreach*/

//la vuelta del bucle for se llama iterar
    $listacompra = array("pan", "leche","Cafe","mandarinas","campurrianas","nachos","aguacate");
    for ($i=0; $i < count($listacompra); $i++) { 
    echo $listacompra[$i]."<br>"; 
    }
    echo "<hr>";
    foreach ($listacompra as $cosa){//aquí digo que cada elemento del array se va a llamar cosa
        echo "<input type='checkbox'>".$cosa."<br>";
    }
    ?>
</body>
</html>