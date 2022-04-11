<?php session_start() ?>
<?php
    if(!isset($_SESSION['name'])) header('Location: login.php');
?>
<?php $title = "Promociones" ?>
<?php include_once('./resources/parts/head.php') ?>
<body>
    <?php include_once('./resources/parts/footer.php') ?>
</body>