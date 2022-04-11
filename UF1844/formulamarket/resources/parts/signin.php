<?php 
    $error = false;
    DEFINE('NAME','admin');
    DEFINE('PASS','admin');
    if(isset($_POST['send'])){
        if($_POST['send'] == 'true'){
            if($_POST['name'] == NAME && $_POST['pass'] == PASS){
                $_SESSION['name'] = $_POST['name'];
                $error = false;
                header('Location: index.php');
            }else $error = true;
        }
    }
?>
<form method="post" action="">
    Iniciar sesion: <br>
    <div class="error">
        <?php 
            if($error == true) echo "Ha ocurrido un error";
        ?>
    </div>
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
</form>