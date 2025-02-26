<link rel="stylesheet" type="text/css" href="/ifcd0210/estilo.css">
<?php
$numero = 7;
$multi = 1;
    echo "<table style='border:1px solid white'>";
    echo "<caption style='border:1px solid white' >tabla de multiplicar del 7</caption>";
    while ($multi <=10){
        echo "<tr>";
        echo ("<td>7*$multi</td>");
        echo ("<td style='border-left:1px solid white'>". $numero * $multi . "
                </td>"
        );
        $multi++;
        echo "</tr>";
    }
    echo "<table>";
?>