<?php
session_start();
$title = 'Cambiar Contraseña | Formula Market';
include_once('./resources/includes/head.php');
if (isset($_SESSION['name'])) {
    include_once('./resources/functions/connection.php');
    $select = 'select email from users where name = "' . $_SESSION['name'] . '");';
    $result = $connection->query($select);
    if (mysqli_affected_rows($connection) == 0) header('Location: ./fail');
    $correo = mysqli_fetch_assoc($result);
}
?>

<body class="">
    <?php
    include_once('./resources/includes/nav.php');
    ?>
    <main class="alone">
        <form action="" method="post">
            Cambiar la contraseña:
            <hr>
            <?php
            if (isset($error)) {
                echo ("<div class=error>Ha ocurrido un error</div>");
            }
            ?>
            <div class="email">
                <input type="email" name="email" id="email" placeholder="Introduce tu correo" value="<?php if (isset($correo)) echo $correo;
                                                                                                        else "" ?>">
            </div>
            <div class="controls">
                <input type="submit" value="Enviar" name="send"> <input type="reset" value="Limpiar">
            </div>
            <div class="redirect"></div>
        </form>
        <?php
        if (!isset($error) && isset($_POST['send'])) {
            include_once('./resources/functions/connection.php');
            $select = 'select * from users where email = "' . $_POST['email'] . '");';
            $result = $connection->query($select);
            if (mysqli_affected_rows($connection) != 0) {
                $address = $_POST['email'];
                $users = mysqli_fetch_assoc($result);
                $token = bin2hex(random_bytes(16));
                include_once('./resources/functions/connection.php');
                $insert = 'insert into `token`(user_id, token) values("' . $users['id'] . '","' . $token . '")';
                $connection->query($insert);
                include_once('./resources/mails/send.php');
                sleep(2);
                header('Location: ./');
            } else {
                $error = "No existe una cuenta con ese correo";
            }
        }
        ?>
    </main>
    <?php
    include_once('./resources/includes/footer.php');
    ?>
</body>