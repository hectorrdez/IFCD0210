<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>11. Escribe un programa que lea un número N e imprima una pirámide de números con N filas como en la siguiente figura:

        <br> 1

        <br> 21

        <br> 321

        <br> 4321

        <br> 54321</p>
    
    <p>
        <?php
            for($i = 0; $i <= 5; $i++){
                for($j = $i; $j > 0; $j--) echo "$j";
                echo "<br>";
            }
        ?>
    </p>

</body>

</html>