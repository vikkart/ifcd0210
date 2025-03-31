<?php

function mostrarLista()
{

    //... aquí va el código que lee el fichero json, lo convierte a array y lo "pinta" 
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Compra</title>
</head>

<body>
    <h1>Mi lista de la compra</h1>

    <form action="añadir.php" method="post">
    <input type="text" name="producto">
    <input type="text" name="precio">
    <input type="submit"> 
    </form>

    <?php mostrarLista() ?>

</body>

</html>