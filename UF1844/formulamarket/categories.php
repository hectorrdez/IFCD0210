<?php session_start() ?>
<?php $title = 'Categorias' ?>
<?php if(!isset($_SESSION['name'])){
    $_SESSION['last'] = 'categories';
    header('Location: login.php');
}?>
<?php include_once('./resources/parts/head.php')?>
<body>
    <?php include_once('./resources/parts/nav.php') ?>
    <?php include_once('./resources/parts/footer.php') ?>
</body>
</html>