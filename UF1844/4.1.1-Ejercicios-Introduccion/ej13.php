<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>13. Escribe un script PHP que muestre los números del 1 al 100 dentro de una tabla HTML,

        teniendo esa tabla filas de 10 dígitos.

        <br>1 2 3 4 5 6 7 8 9 10

        <br>11 12 13 14 15 16 17 18 19 20

        <br>....

       <br> ....</p>
    <p>
        <?php
            echo "<table>";
            $conta = 0;
            for($i = 1; $i <= 100; $i++){
                if($conta == 0){
                    echo "<tr>";
                }
                echo "<td>$i</td>";
                $conta ++;
                if($conta == 10){
                    echo "</tr>";
                    $conta = 0;
                }
            }
            echo "</table>";
        ?>
    </p>
</body>

</html>