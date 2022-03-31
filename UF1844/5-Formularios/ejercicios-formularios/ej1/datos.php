<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
</head>
<body>
    <pre>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        var_dump($_POST);
    }else{
        var_dump($_GET);
    }
    ?>
    </pre>
</body>
</html>