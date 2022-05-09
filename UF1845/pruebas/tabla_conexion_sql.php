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
        <input type="text" name="busqueda" id="busqueda">
    </form>
    <?php
    $mysqli = new mysqli("localhost", "root", "", "bd_tienda");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    echo $mysqli->host_info . "\n";
    if(isset($_GET['busqueda'])){
        $busqueda = $_GET['busqueda'];
        $query = "SELECT * FROM productos WHERE nombre LIKE '%$busqueda%'";
        $resultado = $mysqli->query($query);
        while($fila = $resultado->fetch_assoc()){
            echo $fila['nombre'] . "<br>";
        }
    }
    

    ?>
</body>
</html>