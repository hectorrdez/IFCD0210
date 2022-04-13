<form method="post" action="">
    Has iniciado sesion como <?= $_SESSION['name'] ?>. <br>
    ¿Estas seguro de querer cerrar la sesión? <br>
    <input type="submit" name="opt" value="Si"> 
    <input type="submit" name="opt" value="No"> 
</form>
<?php if(isset($_POST['opt'])){
    if($_POST['opt'] == 'Si'){
        writeLog('login.json',$_SESSION['name'],date('r'),'logout');
        session_destroy();
    }
    header('Location: index.php');
} ?>