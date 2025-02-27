<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multiplicar</title>
    <link rel="stylesheet" type="text/css" href="/ifcd0210/estilo.css">

</head>
<body>    
<?php
$numero = 7;
$multi = 1;
    echo "<table>";
    echo "<caption>tabla de multiplicar del 7</caption>";
    while ($multi <=10){
        echo "<tr>";
        echo ("<td>7*$multi</td>");
        echo ("<td>". $numero * $multi . "
                </td>"
        );
        $multi++;
        echo "</tr>";
    }
    echo "<table>";
?>

<!--style='border-left:1px solid white'-->
</body>
</html>

 