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
Crear una función llamada saludar que recibe la hora en formato 0-24:
    si la hora recibida es de de 6 a 12 : saludar con "buenos días!"
    si la hora recibida es de de 12 a 20 : saludar con "buenas tardes!"
    si la hora es de 20 a 6 (o si no entra en ninguno de los dos intervalos anteriores): "buenas noches!"
*/
function br (){
    echo "<br>";
}
function saludar ($hora){
    if ($hora >= 0 && $hora < 6){
        return "Buenas noches!";
    }
    if($hora >= 6 && $hora < 12){
        return "Buenos días!";
    }if ($hora >= 12 && $hora < 20 ) {
        return "Buenas tardes!";
    }if ($hora >= 20 && $hora < 23){
        return "Buenas noches!";
    }
};


echo saludar(6);

br();


echo saludar(15);

br();

echo saludar(20);
?>
</body>
</html>