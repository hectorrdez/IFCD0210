<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (!isset($_GET['nom'])) header('Location: ./');
    require('conexion.php');
    $select = 'select * from ciclista where nomeq = "' . $_GET['nom'].'"';
    $resultado = mysqli_query($connection, $select);
    if (mysqli_affected_rows($connection) == 0) echo 'No se han encontrado Resultados';
    else {
        echo '<table>';
        $fila = $resultado -> fetch_assoc();
        echo '<tr>';
        for($i = 0; $i< sizeof(array_keys($fila)); $i++){
            printf('<th>%s</th>',array_keys($fila)[$i]);
        }
        echo("<tr><td>".$fila['dorsal']."</td><td>".$fila['nombre']."</td><td>".$fila['edad']."</td><td><a href='detalle.php?nom=".$fila['nomeq']."'>".$fila['nomeq']."</a></td></tr>");
        echo '</tr>';
        while ($fila = $resultado -> fetch_assoc()) {
            echo("<tr><td>".$fila['dorsal']."</td><td>".$fila['nombre']."</td><td>".$fila['edad']."</td><td><a href='detalle.php?nom=".$fila['nomeq']."'>".$fila['nomeq']."</a></td></tr>");
        }
        echo '</table>';
    }
    ?>
    
</body>

</html>