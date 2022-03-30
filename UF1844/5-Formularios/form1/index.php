<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <form action="" method="get">
        USUARIO: <input type="text" name="usuario" id="usuario"><br>
        <?php
            if(isset($_GET['submit'])){
                $error_user = false;
                if(isset($_GET['usuario']) && !empty(trim($_GET['usuario']))){
                    if(strlen(trim($_GET['usuario'])) <= 10 && strlen(trim($_GET['usuario'])) >= 5){
                        if($_GET['usuario']!== 'fempa'){
                            echo "bienvenido $_GET[usuario]";
                        }
                    }else{
                        $error_user = true;
                    }
                }else{
                    $error_user = true;
                }
                if($error_user == true) echo "<span class='error'>Hay un error con el usuario</span>";
            }
        ?>
        <br>
        CONTRASEÑA: <input type="password" name="contrasena" id="contrasena"><br>
        <?php
            if(isset($_GET['submit'])){
                $error_pass = false;
                if(isset($_GET['contrasena']) && !empty(trim($_GET['contrasena']))){
                    if(strlen(trim($_GET['contrasena'])) >= 3 && strlen(trim($_GET['contrasena'])) <= 10){
                        if($_GET['contrasena']=== '12345' && $_GET['usuario']=== 'fempa'){
                            echo "<h1>Bienvenido</h1>";
                        }
                    }else{
                        $error_pass = true;
                    }
                }else{
                    $error_pass = true;
                }
                if($error_pass == true) echo "<span class='error'>Hay un error con la contraseña</span>";
            }
        ?>
        <br>
        <input type="submit" value="Enviar" name="submit">
    </form>
</body>
</html>