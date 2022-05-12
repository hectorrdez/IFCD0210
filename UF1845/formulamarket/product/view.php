<?php 
session_start();
$basePath = '../';
include_once('../resources/functions/connection.php');
$_SESSION['last'] = 'product/view?id='.$_GET['id'];
$select = 'SELECT * FROM product where product.id = '.$_GET['id'];
$consulta = $connection->query($select);
if(mysqli_affected_rows($connection) == 0){
    header('Location: ../404-not-found.php');
}
if(!isset($_SESSION['name'])){
    header('location:'.$basePath. '/login');
}
$resultado = $consulta->fetch_assoc();
$title = $resultado['name'].' | Formula market';
include_once('../resources/includes/head.php');
?>
<body>
    <?php include_once('../resources/includes/nav.php') ?>
    <main class="alone">
        <div class="details">
            <div class="img-product">
                <img src="<?= $basePath.'resources/imgs/products/'.$resultado['img'].".jpg" ?>" alt="">
            </div>
            <div class="details-product">
                <div class="name">
                    <?= $resultado['name'] ?>
                </div>
                div
            </div>
        </div>
    </main>
    <?php include_once('../resources/includes/footer.php') ?>
</body>
