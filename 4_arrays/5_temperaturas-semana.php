<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperaturas - semana</title>
    <link rel="stylesheet" type="text/css" href="/ifcd0210/estilo.css">

</head>
<body>
<?php
/* 
    Crear un array $dias con las siguientes claves: "lunes","martes", ..., "sábado", "domingo"
    Iterando ese array, crear otro array asociativo $temperaturas:
        - cuya clave es el día de la semana
        - el valor es un número aleatorio 

    Iterar $temperaturas, mostrando el texto "la temperatura del lunes es X ºC, ..."

    Pista: el método push() puede resultar útil para añadir elementos a un array nuevo
*/
$dia = ["lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo"];
$temperaturas = [];
for ($i=0; $i < count($dia); $i++) { 
    echo $dia[$i] . "<br>";
};
echo "<hr>";

for ($i=0; $i < count($dia); $i++) { 
    $temperaturas[$dia[$i]] = rand(1,25); 
    echo "La temperatura del " . $dia[$i] . " es " . $temperaturas[$dia[$i]] . " ºC<br>";
};

?>
</body>
</html>