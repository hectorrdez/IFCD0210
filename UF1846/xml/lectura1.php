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
    $miXml = simplexml_load_file("http://www.aemet.es/xml/municipios/localidad_03014.xml");
    echo $miXml->provincia.'<br>';
    foreach($miXml->prediccion->dia as $element){
        echo $element['fecha'].'<br><hr>';
        foreach($element->temperatura as $element2){
            echo "La temperatura maxima es: ".$element2->maxima.'<br>'; 
            echo "La temperatura minima es: ".$element2->minima.'<br>'; 
        }
        foreach($element->viento as $element3){
            if($element3['periodo'] == '00-24' || $element3['periodo'] == null){
                echo 'La direccion del viento es '.$element3->direccion.' y la velocidad es '.$element3->velocidad.'<br>';
            }
        }  
        echo '<br>';
    }
    
    ?>
</body>
</html>