<?php
/* 
Crear un programa en php que reciba dos parametros por la URL num1 y num2
en caso de que no se especifiquen, el programa mostrará el texto: "por favor, indique los parámetros correspondientes"
y en caso de que se especifiquen mostrar la suma de ambos números utilizando una función que devuelva: "la suma es: X"


Pista: la función isset($variable), nos permite comprobar si una variable está definida
*/

function sumar ($num_1,$num_2){
    $suma= $num_1 + $num_2;
    return "El resultado de la suma es: $suma";
};

if (isset($_GET['num_1']) && isset($_GET['num_2'])) {
    $num_1 = $_GET["num_1"];
    $num_2 = $_GET["num_2"];
    echo sumar($num_1, $num_2);  
}else{
    echo "por favor, indique los parámetros correspondientes";
};
?>