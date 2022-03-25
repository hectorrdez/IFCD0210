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
    Crea un array con 10 números aleatorios  (ver usu de la función PHP rand(int $min, int $max)), ordena el array (ver función PHP sort) y muestra por pantalla el contenido del array usando un bucle for. Indica cual es el valor más alto y el más bajo de los insertados.
    </p>
    <p>
        <?php
            $miarray = [];
            $min = ""; $max = "";
            for($i = 0; $i < 10; $i++){
                $miarray[$i] = rand(0,100);
                if($miarray[$i] > $max || ($i == 0)) $max = $miarray[$i];
                if($miarray[$i] < $min || ($i == 0)) $min = $miarray[$i];
            }
            var_dump($miarray);
            echo("<br>el maximo es: $max<br>el minimo es: $min");
        ?>
    </p>
</body>
</html>