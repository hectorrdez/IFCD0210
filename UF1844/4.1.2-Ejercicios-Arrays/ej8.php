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
    Crea dos arrays de la misma longitud rellandolos de manera: A0, A1, A2,.... y el otro B0, B1, B2, ... . Después recorre los arrays y guarda en un tercer array la información intercalada de los dos array primeros, quedando: A0, B0, A1, B1, A2, B2, ....
    </p>
    <p>
        <?php
            $arrayA = [];
            $arrayB = [];
            for($i = 0; $i < 10; $i++){
                $arrayA[$i] = "A$i";
                $arrayB[$i] = "B$i";
            }
            $total = [];
            $contaA = $contaB = 0;
            for($i = 0; $i < 20; $i++){
                if($i % 2 == 0){
                    $total[$i] = $arrayA[$contaA];
                    $contaA++;
                }else{
                    $total[$i] = $arrayB[$contaB];
                    $contaB++;
                }
            }
            echo "<br><pre>";
            print_r($arrayA);
            echo "<br>";
            print_r($arrayB);
            echo "<br>";
            print_r($total);
            echo "</pre>";
        ?>
    </p>
</body>
</html>