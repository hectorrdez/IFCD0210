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
    Crear un array muy grande con elementos aleatorios (números), en el array deben existir elementos repetidos por lo que mejor es que el array seán números aleatorios del 1 al 100. Posteriormente recorre el array creando un nuevo array donde solo aparezca números únicos, es decir, ignorando los repetidos, pero a su vez  debemos contar cuantas veces aparece cada número entre el  1 y el 100. Al final, deberemos mostrar el contenido del array con los elementos únicos separando por coma cada elemento. Y un resumen de las veces que se repite cada elemento, por ejemplo:
El número 1 aparece 4 veces.
El número 2 aparece 0 veces.
El número 3 aparece 1 vez,
..
el número 100 aparece 0 veces.
    </p>
    <p>
        <ul>
        <?php
            $arrayEnorme = [];
            for($i = 0; $i < 1000; $i++){
                $arrayEnorme[$i] = rand(1, 100);
            }
            $arrayEnorme2 = array_sort($arrayEnorme, SORT_NUMERIC);
            echo "<pre>";
            var_dump($arrayEnorme2);
            echo "</pre>";
            
            // var_dump(count($arrayEnorme));
        ?>
        </ul>
    </p>
</body>
</html>