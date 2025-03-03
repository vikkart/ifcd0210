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
    Crear una función por cada operación básica: suma, resta, multiplicación y división
    Probar individualmente cada función para ver si funcionan correctamente (cuidado con dividir entre 0)
*/
$numero_1 = 1;
$numero_2 = 2;
$operacion_realizar= "/"; 
    function suma ($numero_1, $numero_2){
        echo $numero_1 + $numero_2;
    }

       //echo suma ($numero_1, $numero_2);
       //echo "<br>";

    function resta ($numero_1, $numero_2){
        echo $numero_1 - $numero_2;
    }

        //echo resta ($numero_1, $numero_2);
        //echo "<br>";

    function multi ($numero_1, $numero_2){
        echo $numero_1 * $numero_2;
    }

       //multi ($numero_1, $numero_2);
       //echo "<br>";

    function divi ($numero_1, $numero_2){
        echo $numero_1 / $numero_2;
    }

        //divi ($numero_1, $numero_2);
        //echo "<br>";

/*    Una vez hechas, hacer una función que reciba 3 parámetros (numero1, numero2 y operación a realizar):
    Si la función recibe la operación "+", ha de llamar a la función "suma" creada con anterioridad con los números recibidos.
    De igual manera ha ocurrir si recibe la operación "-", "*" y "/"
    Si la operación no es ninguna de las anteriores, se ha de mostrar un mensaje de error: "Operación desconocida" */
function calculadora ($numero_1, $numero_2, $operacion_realizar){
    if ($operacion_realizar == "+") {
        return suma($numero_1, $numero_2);
    } elseif ($operacion_realizar == "-") {
        return resta($numero_1, $numero_2);
    } elseif ($operacion_realizar == "*") {
        return multi($numero_1, $numero_2);
    } elseif ($operacion_realizar == "/") {
        if ($numero_2 == 0) {
            return "Error: División por cero";
        }
        return divi($numero_1, $numero_2);
    } else {
        return "Operación desconocida";
    }
}
echo calculadora ($numero_1, $numero_2, $operacion_realizar);

?>
</body>
</html>