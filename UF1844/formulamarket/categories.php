<?php session_start() ?>
<?php $title = 'Categorias' ?>
<?php if(!isset($_SESSION['name'])){
    $_SESSION['last'] = 'categories.php';
    header('Location: login.php');
}?>
<?php include_once('./resources/parts/head.php')?>
<body>
    <?php include_once('./resources/parts/nav.php') ?>
    <h2>SELECCIONA LA CATEGORIA</h2>
    <div class="categories">
        <div class="formula-1"><img src="resources/imgs/formula-e.jpg" alt=""></div>
        <div class="formula-e"><img src="resources/imgs/formula-1.jpg" alt=""></div>
    </div>
    <?php include_once('./resources/parts/footer.php') ?>
</body>
</html>