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
    Crea un array introduciendo solo los diás de la semana Lunes, jueves y domingo, en las posiciones 0, 3 y 6 respectivamente. Observa su contenido utilizando la función var_dump($variable).
    </p>
    <p>
        <?php
            $semana = [];
            $semana[0] = "Lunes";
            $semana[3] = "Jueves";
            $semana[6] = "Domingo";
            var_dump($semana);
        ?>
    </p>
</body>
</html>