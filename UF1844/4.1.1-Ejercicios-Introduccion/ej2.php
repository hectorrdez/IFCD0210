<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>2. Realiza un programa que muestre en pantalla los números PARES del 1 al 100 usando un bucle For. (los números pares son divisibles entre 2 → número % 2 == 0)</p>
    <p>
        <?php
            for($i = 1; $i <= 100; $i++){
                if($i % 2 == 0) echo "$i <br>";
            }
        ?>
    </p>
</body>
</html>