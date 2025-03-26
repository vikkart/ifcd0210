<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" type="text/css" href="/ifcd0210/estilo.css">
</head>
<body>
<?php
 /* 
    Crear una función suma que reciba dos números como parámetros
    y muestra por pantalla su suma con un echo

    Hacer otra versión de la función, pero esta vez tiene que devolver el valor
     
 */
$numero_1 = 1;
$numero_2 = 2;
function suma ($numero_1, $numero_2){
    echo $numero_1 + $numero_2;
}
//suma(1,2);
suma ($numero_1, $numero_2);
echo "<br>";
function suma_2 ($numero_1, $numero_2){
    return $numero_1 + $numero_2;
}

echo suma_2 ($numero_1, $numero_2);
?>

</body>
</html>
