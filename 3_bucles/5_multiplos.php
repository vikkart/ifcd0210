<head>
    <link rel="stylesheet" type="text/css" href="/ifcd0210/estilo.css">
</head>
<?php
$numero = 3;
$multi = 1;
    echo "<table style='border:1px solid white'>";
    echo "<caption style='border:1px solid white'>Multiplos de 3</caption>";
    while ($multi <=300){
        echo "<tr>";
        echo ("<td>3*$multi</td>");
        echo ("<td style='border-left:1px solid white'>". $numero * $multi . "
                </td>"
        );
        $multi++;
        echo "</tr>";
    }
    echo "<table>";
?>