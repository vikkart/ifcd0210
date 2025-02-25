<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5_cara_cruz.php</title>
</head>
<body>
    <p>Crear un programa que genere un número aleatorio entre 1 y 100, si el número es mayor que 50, mostrar el texto “Cara” y en caso contrario mostrar Cruz.
Extra: hacer que el texto “cara” salga en color azul y el texto “cruz” salga en rojo
Una vez terminados los ejercicios, instalar git en el ordenador, crear una cuenta de Github, y opcionalmente subir la carpeta ifcd0210 como un repositorio
</p>
<?php 
        echo rand(1, 100);
        echo "<br>"; 
        if (rand(1, 100) > 50){
            print("cara");
        }else{
            print("cruz");
        }
        //---- forma del profe -----
        echo "<br>";
        $random = rand(1,100);
        print($random);
        echo "<br>";
        if ($random > 50){
            echo("cara");
        }else{
            echo("cruz");
        }
        $text = $random > 50 ? "cara" : $true?; 
?>
</body>
</html>