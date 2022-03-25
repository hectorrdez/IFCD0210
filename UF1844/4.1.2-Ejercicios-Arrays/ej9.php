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
    Crear un array muy grande con elementos aleatorios (números), en el array deben existir elementos repetidos por lo que mejor es que el array seán números aleatorios del 1 al 9. Posteriormente recorre el array creando un nuevo array donde solo aparezca números únicos, es decir, ignorando los repetidos, muestra el contenido usando var_dump.
    </p>
    <p>
        <?php
            $arrayEnorme = [];
            $arrayUnico = [];
            for($i = 0; $i < 1000; $i++){
                $arrayEnorme[$i] = rand(1,9);
            }
            $arrayUnico = array_unique($arrayEnorme);
            echo "<pre>";
            print_r($arrayUnico);
            echo "</pre>";
        ?>
    </p>
</body>
</html>