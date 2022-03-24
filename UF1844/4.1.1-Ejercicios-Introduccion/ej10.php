<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>10.Escribe un programa que lea un número N e imprima una pirámide de números con N filas como en la siguiente figura:

        <br> 1

       <br> 121

       <br> 12321

       <br> 1234321</p>
    <p>
        <?php
            for($i = 0; $i < 5; $i++){
                for($j = 1; $j <= $i; $j++) echo "$j";
                for($x = ($i-1); $x > 0; $x--) echo "$x";
                echo "<br>";
            }
        ?>
    </p>
</body>

</html>