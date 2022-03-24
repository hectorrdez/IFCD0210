<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>12. Escribe un programa que dado un numero N e imprima una pirámide de números con N filas como en la siguiente figura:

        <br> 1234321

        <br> 12321

        <br> 121

        <br> 1</p>
    <p>
        <?php
            $filas = 4;
            for($i = $filas; $i > 0; $i--){
                for($j = 1; $j < $i; $j++) echo "$j";
                for($j = $i; $j > 0; $j--) echo "$j";
                echo "<br>";
            }
        ?>
    </p>
</body>

</html>