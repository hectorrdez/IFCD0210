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
    Crea un array con los días de la semana. Usa la función count($array), para saber el tamaño del array. Observa su contenido utilizando la función var_dump($variable)
    </p>
    <p>
        <?php
            $semana = ["Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"];
            count($semana);
            var_dump($semana);
        ?>
    </p>
</body>
</html>