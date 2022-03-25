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
    Crear un array con 5 frutas, haz uso de la función in_array para saber una fruta que estas buscando está en el array o no. Si está en el array devuelve la posición usando la función array_search y luego vuelve a buscarla usando un bucle FOR. Compara la posición devuelta por array_search y la busqueda secuencial con el bucle FOR. (usa una variable auxiliar para guardar la fruta a buscar).
    </p>
    <p>
        <?php
            $busca = "sandia";
            $fruta = ["tomate", "pera", "melon", "sandia", "melocoton"];
            if(in_array($busca,$fruta) == true){
                echo("La fruta se encuentra en el array <br>");
                $pos = array_search($busca,$fruta);
                echo("La fruta se encuentra en la posicion $pos <br>");
            }
            for($i = 0; $i < sizeof($fruta); $i++){
                if($busca == $fruta[$i]){
                    echo("La nueva posicion es $i");
                    break;
                }
            }
        ?>
    </p>
</body>
</html>