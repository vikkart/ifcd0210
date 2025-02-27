<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <link rel="stylesheet" type="text/css" href="/ifcd0210/estilo.css">
</head>
<body>
<?php 
/* Crear un array con la lista de la compra, que contenga al menos 4 elementos.
Utilizar un var_dump() para ver su contenido, modificar el 3er elemento y volvais a mostarlo con el var_dump() */
$listacompra = array("pan", "leche","Cafe","mandarinas","campurrianas","nachos","aguacate");
echo "<br>";
var_dump($listacompra);
echo "<br>";
/* modificar un elemento de un array */
$listacompra[3]="tomate";
echo "<br>";
var_dump($listacompra[3]);
?>
</body>
</html>