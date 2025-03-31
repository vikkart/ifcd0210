<?php

function mostrarLista()
{
    //1) Leer contenido de compra.json ->file_get_contents('ruta_al_fichero') 
    file_get_contents('compra.json');

    //tip: igualar una variable a la función para guardar el texto en dicha variable
    $compra = file_get_contents('compra.json');
    var_dump($compra);
    echo '<br><br>';
    //2) Convertir el contenido(string) a un array que pueda iterar -> json_decode($texto_del_json, true)
    $compraArray = json_decode($compra, true);
    var_dump($compraArray);
    

    //3) Iterar el array renderizando (pintando) el html pertinente 
    $sumatorio = 0;
    echo "<ul>";
    foreach ($compraArray as $value) {
        echo "<li>" . $value['producto'] . '||' . $value['precio'] . "</li>";
        $sumatorio +=  $value['precio'];
        echo"$sumatorio €";
    }
    echo "</ul>";
    echo"$sumatorio €";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
<?php
mostrarLista();
?>
</body>

</html>