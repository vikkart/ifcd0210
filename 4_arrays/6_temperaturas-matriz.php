<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperaturas matriz</title>
    <link rel="stylesheet" type="text/css" href="/ifcd0210/estilo.css">

</head>
<body>
<?php

/* 
    Similar al ejercicio anterior, pero en vez de crear una temperatura por día, en dos: 
    añadir una temperatura aleatoria entre 15-25 grados para la mañana (con la clave "mañana")
    y otra para la tarde entre 5-15 (con la clave "tarde")
    
    De esta manera tendremos un array en el que podríamos acceder a la clave "lunes" 
    y dentro del lunes podría acceder a "mañana" o "tarde" con y así para el resto de días de la semana

    [
        "lunes"=>[
            "mañana"=> 17,
            "tarde" => 8
        ],    
        "martes"=>[ ...],
        ...
    ]

    Una  vez creado: 
    - Probar a mostrar la temperatura del viernes por la tarde.
    - Iterarlo y mostrar el texto "el lunes por la mañana hay 17ºC, y por la tarde 8ºC, el martes por la mañana..."

*/
$dia = ["lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo"];

$horario = ["mañana", "tarde" ];

$temperaturas = []; 


for ($i=0; $i < count($dia); $i++) { 
    $temperaturas[$dia[$i]]= [
    $horario[0]=> rand(0,30),
    $horario[1]=> rand(0,30)
];
};
for ($i=0; $i < count($dia); $i++) { 
    echo "El " . $dia[$i] . " por la mañana hay " . $temperaturas[$dia[$i]][$horario[0]] . "ºC, y por la tarde " . $temperaturas[$dia[$i]][$horario[1]] . "ºC.<br>";
};

/* echo "El " . $dia[$i] . " por la mañana hay " . $temperaturas[$dia[$i]][$horario[0]] . "ºC, y por la tarde " . $temperaturas[$dia[$i]][$horario[1]] . "ºC.<br>";
 */
//echo $temperaturas[$dia[$i]][$horario[0]] . "<br>";

//Se pone temperaturas, con el array dias dentro para asignar sus valores como claves, después el $i para que el bucle vaya progresando y vaya contando los valores, es decir, los días. Después, se le asigna las dos "cordenadas" que es mañana y tarde. 
//para imprimir también hay que especificiar. 
?>
</body>
</html>