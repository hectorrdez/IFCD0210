<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>5. Utiliza un bucle for para imprimir por la consola la tabla de multiplicar del 8.</p>
    <p>
        <?php
            for($i = 1; $i <= 10; $i++){
                echo "8 x $i = ".($i*8)."<br>";
            }
        ?>
    </p>
</body>
</html>