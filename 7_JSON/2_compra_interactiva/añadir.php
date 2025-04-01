<?php
// Sacar el producto y el precio de $_POST
$producto = $_POST['producto'];
$precio = $_POST['precio'];
$objeto = [

    "producto" => $producto,
    "precio" => $precio,
];
// Sacar el contenido de compra.json (es un string)
$compratext = file_get_contents('compra.json');
var_dump($compratext);
// Convertir el contenido de compra.json de string a un array  (json_decode(...))
$comprajson = json_decode($compratext, true);
var_dump($comprajson);
// Hacer push a dicho array del objeto que contiene el producto y el precio (ojo: respetar la misma estructura que cada objeto del json)

array_push($comprajson, $objeto);
// Reconvertir el fichero a string (json_enconde())
$compraencode = json_encode($comprajson, JSON_PRETTY_PRINT);
// Introducir el texto en el fichero compra.json -> esto no va a funcionar si todos los ficheros de la carpeta tienen permisos de lectura y escritura (buscar en google)
file_put_contents('./compra.json', $compraencode);


header('Location: index.php');