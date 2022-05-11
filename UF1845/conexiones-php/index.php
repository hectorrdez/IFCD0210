<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <form action="" method="get">
            <input type="text" name="id" id="id" value=<?php if (isset($_GET['id'])) {
                                                            echo '"' . $_GET['id'] . '"';
                                                        } else {
                                                            echo "";
                                                        } ?>>
            <input type="submit" value="Enviar"><br>
            <input type="radio" name="select" id="nombre" value="nombre_ciclista">Ciclista
            <input type="radio" name="select" id="nombre" value="nombre_equipo">Equipo
            <input type="radio" name="select" id="nombre" value="dorsal" checked>Dorsal
        </form><br>
    </center>
    <?php require('conexion.php') ?>
    <?php
    if (isset($_GET['id'])) {
        if ($_GET['select'] == 'dorsal') {
            $select = "select * from ciclista where dorsal = " . $_GET['id'];
        }
        if ($_GET['select'] == 'nombre_ciclista') {
            $select = 'select * from ciclista where nombre like "%' . $_GET['id'] . '%"';
        }
        if ($_GET['select'] == 'nombre_equipo') {
            $select = 'select * from ciclista where nomeq like "%' . $_GET['id'] . '%"';
        }
        $resultado = $connection->query($select);
        if ((mysqli_affected_rows($connection)) == 0) echo "No se han encontrado resultados";
        else {
            printf("<table>");
            $fila = $resultado->fetch_assoc();
            echo '<tr>';
            for ($i = 0; $i < sizeof(array_keys($fila)); $i++) {
                printf('<th>%s</th>', array_keys($fila)[$i]);
            }
            echo '</tr>';
            echo ("<tr><td>" . $fila['dorsal'] . "</td><td>" . $fila['nombre'] . "</td><td>" . $fila['edad'] . "</td><td><a href='detalle.php?nom=" . $fila['nomeq'] . "'>" . $fila['nomeq'] . "</a></td></tr>");
            while ($fila = $resultado->fetch_assoc()) {
                echo ("<tr><td>" . $fila['dorsal'] . "</td><td>" . $fila['nombre'] . "</td><td>" . $fila['edad'] . "</td><td><a href='detalle.php?nom=" . $fila['nomeq'] . "'>" . $fila['nomeq'] . "</a></td></tr>");
            }
            printf("</table>");
        }
    }
    ?>
</body>

</html>