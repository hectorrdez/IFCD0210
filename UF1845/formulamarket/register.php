<?php session_start() ?>
<?php $title = 'Registrarse' ?>
<?php include_once('./resources/includes/head.php') ?>
<?php include_once('./resources/includes/writeLog.php') ?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send'])) {
    if (
        isset($_POST['username']) &&
        isset($_POST['password']) &&
        isset($_POST['email']) &&
        isset($_POST['telf']) &&
        isset($_POST['rpassword']) &&
        isset($_POST['cp']) &&
        isset($_POST['address']) &&
        isset($_POST['provincia'])
    ) {
        if (
            !empty(trim($_POST['username'])) &&
            !empty(trim($_POST['password'])) &&
            !empty(trim($_POST['rpassword'])) &&
            !empty(trim($_POST['telf'])) &&
            !empty(trim($_POST['email'])) &&
            !empty(trim($_POST['address'])) &&
            !empty(trim($_POST['cp'])) &&
            !empty(trim($_POST['provincia']))
        ) {

            if (sha1($_POST['password']) == sha1($_POST['rpassword'])) {
                include_once('./resources/functions/connection.php');
                $select = 'SELECT name, email from users where name = "' . $_POST['username'] . '" OR email = "' . $_POST['email'] . '"';
                $resultado = mysqli_query($connection, $select);
                if (mysqli_affected_rows($connection) == 0) {
                    $insert = 'INSERT INTO users(name,pass,email,telf,address,cp,provincia) values ("'
                        . $_POST['username'] . '","'
                        . sha1($_POST['password']) . '","'
                        . $_POST['email'] . '","'
                        . $_POST['telf'] . '","'
                        . $_POST['address'] . '","'
                        . $_POST['cp'] . '","'
                        . $_POST['provincia'] . '")';
                    $connection->query($insert);
                    //insert into log(name, pass,type) VALUES('hola','asdfasd','adios');
                    $connection->query('insert into `log`(`name`,`pass`,`type`) values("' . $_POST['username'] . '","' . sha1($_POST['password']) . '", "register")');
                    $_SESSION['name'] = $_POST['username'];
                    sleep(2);
                    header('Location: index.php');
                } else {
                    $error = 'Algo ha fallado';
                }
            } else {
                $error = 'Las contraseñas no coinciden';
            }
        } else {
            $error = 'No pueden haber campos vacios';
        }
    } else {
        $error = 'Ha occurrido un error';
    }
}
?>

<body class="login">
    <?php include_once('./resources/includes/nav.php') ?>
    <main class="alone">
        <form method="POST">
            Registrarse
            <hr>
            <?php
            if (isset($error)) echo "<div class=error>$error</div>";
            ?>
            <div class="username">
                <input type="text" name="username" placeholder="Usuario">
            </div>
            <div class="email">
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="telf">
                <input type="tel" name="telf" id="telf" placeholder="Telefono">
            </div>
            <div class="address">
                <input type="text" name="address" id="address" placeholder="Tu direccion">
            </div>
            <div class="cp">
                <input type="text" name="cp" id="cp" placeholder="CP">
            </div>
            <div class="provincia">
                <input type="text" name="provincia" id="provincia" placeholder="Provincia">
            </div>
            <div class="password">
                <input type="password" name="password" placeholder="Contraseña">
            </div>
            <div class="rpassword">
                <input type="password" name="rpassword" id="rpassword" placeholder="Repite la contraseña">
            </div>
            <div class="controlButtons">
                <input type="submit" value="Registrarse" name="send"> <input type="reset" value="Limpiar">
            </div>
            <div class="redirect"></div>
        </form>
    </main>
    <?php include_once('./resources/includes/footer.php') ?>
</body>

</html>