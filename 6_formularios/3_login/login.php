<?php

// comprobar si los valores recibidos del formulario coinciden con los siguientes:
//var_dump($post);


// si coinciden, redirigir a la página de bienvenida
// sino, redirigir a la página de error
// pista: la función header('Location: nombre_del_fichero.extension') sirve para redirigir

$user = $_POST['user'];
$password = $_POST['password'];
//if ($user === $_POST['user']){};
if ($user === 'admin' && $password === '$uper$ecr3t') {
    header("Location: bienvenida.php?user=$user");
    
} else {
    header('Location: error.html');
    
};

?>