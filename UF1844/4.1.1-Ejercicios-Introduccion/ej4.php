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
    4. Realiza un programa que sume los números del 1 al 100 y muestre el resultado por pantalla.
    </p>
    <p>
        <?php
            $result = 0;
            for($i = 1; $i <= 100; $i++){
                $result = $result + $i;
            }
            echo "$result";
        ?>
    </p>
</body>
</html>