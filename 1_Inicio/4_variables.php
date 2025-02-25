<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4_variables.php</title>
</head>
<body>
    <h1> Variables </h1> 
    <?php 
    $var = 'Roberto';
    $numero_1 = 1;
    $numero_2 = 2;
    $booleana = true;
    $concatenacion = "concatenacion"; 
    //concatenar la variable string con otro texto
    echo "<br>";
    echo "$var, $concatenacion";
    echo "<br>";
    echo($var . $concatenacion);
    //sumar ambos números
    echo "<br>";
    print ($numero_1 + $numero_2);
    //dividir los números
    echo "<br>";
    print ($numero_1 / $numero_2);
    //hallar el módulo de los números (el resto de dividir uno entre otro)
    echo "<br>";
    print ($numero_1 % $numero_2);
    //mostrar la variable booleana
    echo "<br>";
    print( $booleana);
    //negar la variable booleana
    echo "<br>";
    if(!$booleana) {
        echo "La variable es falsa";
    } else {
        echo "La variable es verdadera";
    }
    /* 
    Explicacion chatgpt: 
    En PHP, "negar la variable booleana" significa invertir su valor. Esto se logra utilizando el operador de negación lógico (!).
    Cuando apliczas el operador ! a una variable booleana:
        Si la variable es true, se convierte en false.
        Si la variable es false, se convierte en true.
        $var = true;
        $var = !$var;  // Ahora $var es false
        
        $var2 = false;
        $var2 = !$var2;  // Ahora $var2 es true
    */
    //ver si uno de los números es mayor o igual que el otro
    echo "<br>";
    if ($numero_1 >= $numero_2){
        echo $numero_1 . " es mayor que " . $numero_2;
    }else{
        echo $numero_2 . " es mayor que " . $numero_1;
    }
    ?>
</body>
</html>