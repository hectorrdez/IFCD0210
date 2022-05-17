<?php
$title = 'Cambiar la contraseña | Formula Market';
include_once('./resources/includes/head.php');
if(isset($_POST['pass']) && isset($_POST['rpass']) && isset($_POST['send'])){
    if(!empty(trim($_POST['pass'])) && !empty(trim($_POST['rpass'])) && sha1($_POST['pass']) == sha1($_POST['rpass'])){
        $insert = 'update users set pass ="'.sha1($_POST['pass']).'" where id="'.$data['user_id'].'"';
    }
}
?>

<body class="login">
    <?php
    include_once('./resources/includes/nav.php');
    ?>
    <main>
        <form action="" method="post">
            <?php
            if (!isset($_GET['token'])) {
                header('Location: ./fail');
            } else {
                include_once('./resources/functions/connection.php');
                $select = 'select * from token where token="' . $_GET['token'] . '";';
                $result = $connection->query($select);
                if (mysqli_affected_rows($connection) != 0) {
                    $data = mysqli_fetch_assoc($result);
            ?>
                Cambiar la contraseña: <hr>
                    <div class="pass">
                        <input type="password" name="pass" id="pass" placeholder="Nueva contraseña">
                    </div>
                    <div class="rpass">
                        <input type="password" name="rpass" id="rpass" placeholder="Repita la nueva contraseña">
                    </div>
                    <div class="controls">
                        <input type="submit" value="Enviar" name="send"> <input type="reset" value="Limpiar">
                    </div>
                    <div class="redirect"></div>
            <?php
                    // $data = mysqli_fetch_assoc($result);
                    // $current_time = date_();
                    // $margin = date_diff($current_time, $data['time']);
                    // $margin -> format('%s');
                    // if($margin<= 300){

                    // }
                }
            }
            ?>
        </form>
    </main>
    <?php
    include_once('./resources/includes/footer.php');
    ?>
</body>