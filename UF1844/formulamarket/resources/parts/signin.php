<?php 
    DEFINE('NAME','admin');
    DEFINE('PASS','admin');
    if(isset($_POST['send'])){
        if($_POST['send'] == 'true'){
            if($_POST['name'] == NAME && $_POST['pass'] == PASS){
                $_SESSION['name'] = $_POST['name'];
                if(!isset($_SESSION['last'])){
                    writeLog('login.json',$_POST['name'],date('r'),'login');
                    sleep(2);
                    header('Location: index.php');

                }else{
                    sleep(2);
                    header("Location:".$_SESSION['last']);
                }  
               
            }else{
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
    <div class="submit">
        <input type="submit" value="Iniciar Sesion">
    </div>
    <input type="hidden" name="send" value="true">
    <div class="redirect">
    </div>
</form>