<?php 
    session_start();
    if(!isset($_SESSION['name'])) header('Location: ./login');
    $title = 'Promociones | Formula Market';
    include_once('./resources/includes/head.php');
?>
<body>
    <?php include_once('./resources/includes/nav.php') ?>
    <main class="alone center">
    <?php
        include_once('./resources/functions/connection.php');
        $select = 'select * from product where offer is not null';
        $result = $connection->query($select);
        if(mysqli_affected_rows($connection) != 0){
            $i = 0;
            echo ('<div class="center wrapper">');
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
                    <div class="last-price"><div class="last-price-product">'.$fila['price'].' $</div></div>'.'
                    <div class="price-product">' . $fila['offer'] . ' $</div>
                    </a></div>');
                    $i++;
                }
                echo ("</div>");
        }else{
            echo 'Lo sentimos, ahora mismo no se encuentra ningun producto en Oferta. Vuelva mas tarde';
        }
    ?>
    </main>
    <?php include_once('./resources/includes/footer.php') ?>
</body>