<?php
session_start();
$basePath = '../';
include_once('../resources/functions/connection.php');
$_SESSION['last'] = 'product/view?id=' . $_GET['id'];
$select = 'SELECT * FROM product where product.id = ' . $_GET['id'];
$consulta = $connection->query($select);
if (mysqli_affected_rows($connection) == 0) {
    header('Location: ../404-not-found.php');
}
if (!isset($_SESSION['name'])) {
    header('location:' . $basePath . '/login');
}
$resultado = $consulta->fetch_assoc();
$title = $resultado['name'] . ' | Formula market';
include_once('../resources/includes/head.php');
?>

<body>
    <?php include_once('../resources/includes/nav.php') ?>
    <main class="alone product">
        <div class="details">
            <div class="img-product">
                <img src="<?= $basePath . 'resources/imgs/products/' . $resultado['img'] . ".jpg" ?>" alt="">
            </div>
            <div class="details-product">
                <div class="name">
                    <?= $resultado['name'] ?>
                </div>
                <div class="descr-product">
                    <ul>
                        <li>Año: <?= $resultado['year'] ?></li>
                        <li>Escuderia: <?= $resultado['team'] ?></li>
                        <li>CV: <?= $resultado['power'] ?>cv/hp</li>
                        <li>Peso: <?= $resultado['weight'] ?>kg aprox.</li>
                    </ul>
                </div>
                <div class="buy-ops">
                    <div class="uds"><input type="number" name="cuantity" id="cuantity" step="1" min="1" placeholder="1"></div>
                    <div class="price-product"><?= $resultado['price'] ?> $</div>
                </div>

            </div>
        </div>
    </main>
    <?php include_once('../resources/includes/footer.php') ?>
</body>