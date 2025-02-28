<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>temperaturas</title>
    <link rel="stylesheet" type="text/css" href="/ifcd0210/estilo.css">
</head>
<body>
<?php

/* 
Dado un array con la temperatura media de  cada día de la semana, sacar:
 - la temperatura máxima, 
 - la mínima 
 - y la temperatura media

*/


$temperaturas = [12, 15, 13, 12, 16, 11, 13];
$max = 0; 
$min = 100; 
$suma= 0;
for ($max=0; $max < count($temperaturas); $max++) { 
    
}

for ($i=0; $i < count($temperaturas); $i++) { 
    $suma += $temperaturas[$i];
    // $suma = $suma + $temperaturas[$i];
    
    if ($temperaturas[$i]<$min) {
        $min = $temperaturas[$i];
    }
    if ($temperaturas[$i]>$max) {
        $max = $temperaturas[$i];
    }
}
echo "Operaciones con Arrays:";
echo "<ul>";
echo "<li>La temperatura mínima es: " . $min . " grados </li>";
echo "<br>";
echo "<li>La temperatura máxima es: " . $max . " grados </li>";
echo "<br>";
echo "<li>La temperatura media es: " . number_format($suma/count($temperaturas),2) . " grados </li>";
echo "<ul>"; 
?>

</body>
</html>