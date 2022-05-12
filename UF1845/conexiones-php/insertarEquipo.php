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
        require('conexion.php');
        if(isset($_GET['nombre']) && isset($_GET['director'])){
            $insertar = 'insert into equipo(nomeq,director) values("'.$_GET['nombre'].'","'.$_GET['director'].'")';
            //insert into equipo (nomeq, director) values ('hola','adios');
            $connection->query($insertar);
            $consulta = 'select * from equipo';
            $resultado = $connection->query($consulta);
            printf("<table>");
            $fila = $resultado -> fetch_assoc();
            echo '<tr>';
            for($i = 0; $i< sizeof(array_keys($fila)); $i++){
                printf('<th>%s</th>',array_keys($fila)[$i]);
            }
            echo '</tr>';
            echo("<tr><td>".$fila['nomeq']."</td><td>".$fila['director']."</td></tr>");
            while ($fila = $resultado->fetch_assoc()) {
                echo("<tr><td>".$fila['nomeq']."</td><td>".$fila['director']."</td></tr>");
            }
            printf("</table>");
        }else{
            header('Location: formularioequipo.php');
        }
    ?>
</body>
</html>