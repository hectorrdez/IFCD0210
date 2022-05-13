<?php 
    DEFINE('NAME','admin');
    DEFINE('PASS','admin');
    if(isset($_POST['send'])){
        if($_POST['send'] == 'true'){
            if($_POST['name'] == NAME && $_POST['pass'] == PASS){
                $_SESSION['name'] = $_POST['name'];
                if(!isset($_SESSION['last'])){
                    writeLog('login.json',$_POST['name'],$_POST['pass'],date('c'),'login');
                    sleep(2);
                    header('Location: index.php');
                    
                }else{
                    writeLog('login.json',$_POST['name'],$_POST['pass'],date('c'),'login');
                    sleep(2);
                    header("Location:".$_SESSION['last']);
                }  
               
            }else if($_POST['name'] == 'register'){
                header('Location: register.php');
            }else{
                writeLog('login.json',$_POST['name'],$_POST['pass'],date('c'),'fail');
                $error = true;
            }
        }
    }
?>
<form method="post" action="" onsubmit="redirect()">
    Iniciar sesion:<br>
    <hr>
    <?php 
        if(isset($error)){ 
            echo ("<div class=error>Ha ocurrido un error</div>");
        }
    ?>
    <div class="name">
        <input type="text" name="name" placeholder="Usuario">
    </div>
    <div class="pass">
        <input type="password" name="pass" placeholder="Contraseña">
    </div>
    <div class="submit controlsButtons">
        <input type="submit" value="Iniciar Sesion">
    </div>
    <input type="hidden" name="send" value="true">
    <a href="./register">No tienes cuenta? Registrate.</a>
    <div class="redirect">
    </div>
</form>