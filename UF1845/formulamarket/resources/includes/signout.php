<form method="post" action="">
    Has iniciado sesion como <?= $_SESSION['name'] ?>. <br>
    ¿Estas seguro de querer cerrar la sesión? <br>
    <input type="submit" name="opt" value="Si"> 
    <input type="submit" name="opt" value="No">
    <div class="redirect">
    </div> 
</form>
<?php if(isset($_POST['opt'])){
    if($_POST['opt'] == 'Si'){
        writeLog('login.json',$_SESSION['name'],'',date('c'),'logout');
        include_once('./resources/functions/connection.php');
        $connection -> query('insert into `log`(`name`,`type`) values("'.$_SESSION['name'].'","logout")');
        session_destroy();
        header('Location: ./');
    }else{
        if(isset($_SESSION['last'])){
            header('Location: '.$_SESSION['last']);
        }else{
            header('Location: ./');
        }
    }
} ?>