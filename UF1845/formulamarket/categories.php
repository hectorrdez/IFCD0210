<?php
session_start();
$title = 'Categorias';
$_SESSION['last'] = 'categories';
if (!isset($_SESSION['name'])) {
    header('Location: login');
}
include_once('./resources/includes/head.php');
?>

<body>
    <?php include_once('./resources/includes/nav.php') ?>
    <main class="alone">
        <?php if (!isset($_GET['type'])) { ?>
            <h2 class="categoryTitle">SELECCIONA LA CATEGORIA</h2>
            <div class="categories">
                <div class="formula-1 category"><a href="categories?type=classic" target="_self"><img src="resources/imgs/products/renault-r26.jpg" alt=""></a>Formula Classic</div>
                <div class="formula-e category"><a href="categories?type=modern" target="_self"><img src="resources/imgs/products/Ferrari1.jpg" alt=""></a>Formula 2022</div>
            </div>
        <?php  } ?>
        <?php
        if (isset($_GET['type'])) {
            include_once('./resources/functions/connection.php');
            if ($_GET['type'] == 'modern' || $_GET['type'] == 'classic') {
                $result = $connection->query('select * from product where type = "' . $_GET['type'] . '";');
                $i = 1;
                echo ('<div class="wrapper center">');
                while ($fila = $result->fetch_assoc()) {
                    echo ('
                <div class="product product-' . $i . '"><a href="./product/view?id=' . $fila['id'] . '">
                    <div class="img-product"><img src="./resources/imgs/products/' . $fila['img'] . '.jpg"></div>
                    <div class="name-product">' . $fila['name'] . '</div>
                    <div class="descr-product"><ul class="change-list">
                        <li>Año: ' . $fila['year'] . '</li>
                        <li>Escuderia: ' . $fila['team'] . '</li>
                        <li>CV: ' . $fila['power'] . 'cv/hp</li>
                        <li>Peso: ' . $fila['weight'] . 'kg aprox.</li>
                    </ul></div>
                    <div class="price-product">' . $fila['price'] . ' $</div>
                    </a></div>');
                    $i++;
                }
                echo ("</div>");
            }
        }
        ?>
    </main>
    <?php include_once('./resources/includes/footer.php') ?>
</body>

</html>