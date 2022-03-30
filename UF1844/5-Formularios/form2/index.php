<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="checkbox" name="transporte" id="bus" value="bus"> Bus <br>
        <input type="checkbox" name="transporte" id="bici" value="bici"> Bici <br>
        <input type="checkbox" name="transporte" id="coche" value="coche"> Coche <br>
        <input type="submit" value="Enviar">
        <?php
            echo "has selecionado $_GET[transporte]";
        ?>
    </form>
</body>
</html>