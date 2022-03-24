<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>6. Construye y muestra por consola un "triángulo" de 7 líneas como el siguiente:</p>
    <p>
        <?php
            for($i = 0; $i < 7; $i++){
                for($j = $i; $j >= 0; $j--){
                    echo "*";
                }
                echo "<br>";
            }
        ?>
    </p>
</body>
</html>