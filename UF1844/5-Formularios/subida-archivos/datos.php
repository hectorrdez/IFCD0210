<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagenes</title>
</head>
<body>
<?php
$dir_subida = './uploads/';
$fichero_subido = $dir_subida."1.jpg";

echo "<pre>";
if(move_uploaded_file($_FILES['fichero_usuario']['tmp_name'],$fichero_subido)){
    echo "El fichero es valido y se subio con exito. \n";
}else{
    echo "¡Posible ataque de subida de ficheros! \n";
}
echo "</pre>";
echo "<img src=$fichero_subido>";
?>
</body>
</html>