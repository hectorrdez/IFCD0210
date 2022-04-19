<?php session_start() ?>
<?php $title = 'Registrarse' ?>
<?php include_once('./resources/parts/head.php') ?>
<?php include_once('./resources/parts/writeLog.php') ?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send'])) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if (!empty(trim($_POST['username'])) && !empty(trim($_POST['password']))) {
            echo (writeLog('users.json', $_POST['username'], $_POST['password'], date('c'), 'sign-up'));
            sleep(2);
            header('Location: index.php');
        } else {
            $error = 'Ha occurrido un error';
        }
    } else {
        $error = 'No pueden haber campos vacios';
    }
}
?>

<body class="login">
    <?php include_once('./resources/parts/nav.php')?>
    <main class="alone">
        <form method="POST">
            Registrarse
            <hr>
            <?php
            if (isset($error)) echo "<div class=error>$error</div>";
            ?>
            <div class="username">
                <input type="text" name="username">
            </div>
            <div class="password">
                <input type="password" name="password">
            </div>
            <div class="controlButtons">
                <input type="submit" value="Registrarse" name="send"> <input type="reset" value="Limpiar">
            </div>
        </form>
    </main>
    <?php include_once('./resources/parts/footer.php')?>
</body>

</html>