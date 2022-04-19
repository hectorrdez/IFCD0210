<?php session_start() ?>
<?php
    if(!isset($_SESSION['name'])){
        $_SESSION['last'] = 'promos.php';
        header('Location: login.php');
    }
?>
<?php $title = "Promociones" ?>
<?php include_once('./resources/parts/head.php') ?>
<body>
    <?php include_once('./resources/parts/nav.php') ?>
    <main class="alone">
        <div class="wrapper-6">
            <div class="product product-1">
                <div class="img-product"><img src="./resources/imgs/formula-1/mercedes.jpg" alt="mercedes w13"></div>
                <div class="name-product">W13</div>
                <div class="descr-product"><ul>
                    <li>Año: 2022</li>
                    <li>Escuderia: Mercedes</li>
                    <li>CV: 980cv/hp</li>
                    <li>Peso: 797kg aprox.</li>
                </ul></div>
                <div class="last-price"><span class="last-price-product italic"> 140.000.000 $ </span><span class="offer">-20%</span></div>
                <div class="price-product italic">112.000.000 $</div>
            </div>
            <div class="product product-2">
                <div class="img-product"><img src="./resources/imgs/formula-classic/renault-r26.jpg" alt="renault r26"></div>
                <div class="name-product">R-26</div>
                <div class="descr-product"><ul>
                    <li>Año: 2006</li>
                    <li>Escuderia: Renault</li>
                    <li>CV: 1000cv/hp</li>
                    <li>Peso: 650kg aprox.</li>
                </ul></div>
                <div class="last-price"><span class="last-price-product italic">20.000.000 $</span><span class="offer">-100%</span></div>
                <div class="price-product italic">0 $</div>
            </div>
        </div>
    </main>
    <?php include_once('./resources/parts/footer.php') ?>
</body>