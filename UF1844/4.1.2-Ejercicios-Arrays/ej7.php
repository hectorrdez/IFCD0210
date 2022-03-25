<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    Crea un array de números donde le indicamos en una variable el tamaño del array, rellenaremos el array con números aleatorios entre 0 y 9, al final muestra por pantalla el valor de cada posición y la suma de todos los valores.

    </p>
    <p>
        <?php
            $tamaño = 10;
            $suma = 0;
            $miarray = [];
            for($i = 0; $i < $tamaño; $i++){
                $newnum = rand(0,9);
                $suma = $suma + $newnum;
                $miarray[$i] = $newnum;
                echo("$newnum <br>");
            }
            echo $suma;
        ?>
    </p>
</body>
</html>