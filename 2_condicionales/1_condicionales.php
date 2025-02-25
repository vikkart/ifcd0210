<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
    <link rel="stylesheet" type="text/css" href="/ifcd0210/estilo.css">
</head>
<body>
<?php 
/* 
Crear un fichero que muestre un número aleatorio entre 1 y 100 
y que además diga si es par o impar
Utiliza constantes para el mínimo y máximo
constantes --> define(nombre, valor)
*/
    define('min', 1);
    define('max', 100);
    $numero_aleatorio = rand(min, max);
    print($numero_aleatorio);
    echo"<br>";
    if ($numero_aleatorio % 2 == 0 ){
    print('el numero es par');
    }else{
    print('el numero es impar');
    };
?>
</body>
</html>