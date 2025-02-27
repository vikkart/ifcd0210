<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" type="text/css" href="/ifcd0210/estilo.css">
</head>
<body>
    <!-- Realizar una agenda:
     Guardar en un array asociativo el nombre de la persona como clave y su número como valor 
     
     ["clave => "valor",...]
    
     Una vez que lo tengamos, mostrar el texto "x tiene el número 6666"
     -->
    <?php
    $numero = array("pepito"=>1111, "benganito"=>2222, "Jesifredo"=>3333);
    var_dump($numero);
    echo "<br><br>";
    foreach ($numero as $clave => $valor /* numero */) {
        echo $clave . "; tlf: " . $valor . ".";
        echo "<br>";
    }
    ?>
</body>
</html>