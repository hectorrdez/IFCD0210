<?php 
    DEFINE('NAME','admin');
    DEFINE('PASS','admin');
    if(isset($_POST['send'])){
        if($_POST['send'] == 'true'){
            include_once('./resources/functions/connection.php');
            $result = $connection -> query('SELECT name, pass,role from users where name = "'.$_POST['name'].'"');
            if(mysqli_affected_rows($connection) != 0){
                $check = mysqli_fetch_assoc($result);
                if($_POST['name'] == $check['name'] && sha1($_POST['pass']) == $check['pass']){
                    $_SESSION['name'] = $_POST['name'];
                    $_SESSION['role'] = $check['role']; 
                    writeLog('login.json',$_POST['name'],$_POST['pass'],date('c'),'login');
                    $connection->query('insert into `log`(`name`,`pass`,`type`) values("'.$_POST['name'].'","'.sha1($_POST['pass']).'","login-success")');
                    sleep(2);
                    if(!isset($_SESSION['last'])){
                        header('Location: ./');
                        
                    }else{
                        header("Location:".$_SESSION['last']);
                    }  
                }else{
                    $connection->query('insert into `log`(`name`,`pass`,`type`) values("'.$_POST['name'].'","'.sha1($_POST['pass']).'","login-fail")');
                    writeLog('login.json',$_POST['name'],$_POST['pass'],date('c'),'login-fail');
                    $error = true;
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
    <div class="submit controlsButtons">
        <input type="submit" value="Iniciar Sesion">
    </div>
    <input type="hidden" name="send" value="true">
    <a href="./register">No tienes cuenta? Registrate.</a><br>
    <a href="./change-pass">¿Olvidaste la contraseña? Cambiala.</a>
    <div class="redirect">
    </div>
</form>