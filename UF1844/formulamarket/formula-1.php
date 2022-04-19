<?php
    session_start();
    $_SESSION['last'] = 'formula-1';
    if(!isset($_SESSION['name'])) header('Location: login.php');
    $title = 'Formula 1';
    include_once('./resources/parts/head.php');
?>
<body>
    <?php include_once('./resources/parts/nav.php'); ?>
    <main class="alone">
    <div class="wrapper-6">
        <div class="product product-1">
            <div class="img-product"><img src="./resources/imgs/formula-1/mercedes.jpg" alt=""></div>
            <div class="name-product">Mercedes W13</div>
            <div class="descr-product"><ul>
                <li>Año:</li>
                <li>Escuderia:</li>
                <li>CV:</li>
                <li>Peso:</li>
            </ul></div>
            <div class="price-product"></div>

        </div>
        <div class="product product-2">
            <div class="img-product"><img src="./resources/imgs/formula-1/Ferrari1.jpg" alt=""></div>
            <div class="name-product"></div>
            <div class="descr-product"><ul>
                <li>Año:</li>
                <li>Escuderia:</li>
                <li>CV:</li>
                <li>Peso:</li>
            </ul></div>
            <div class="price-product"></div>

        </div>
        <div class="product product-3">
            <div class="img-product"><img src="./resources/imgs/formula-1/astonmartin.jpg" alt=""></div>
            <div class="name-product"></div>
            <div class="descr-product"><ul>
                <li>Año:</li>
                <li>Escuderia:</li>
                <li>CV:</li>
                <li>Peso:</li>
            </ul></div>
            <div class="price-product"></div>

        </div>
        <div class="product product-4">
            <div class="img-product"><img src="./resources/imgs/formula-1/mclaren.jpg" alt=""></div>
            <div class="name-product"></div>
            <div class="descr-product"><ul>
                <li>Año:</li>
                <li>Escuderia:</li>
                <li>CV:</li>
                <li>Peso:</li>
            </ul></div>
            <div class="price-product"></div>

        </div>
        <div class="product product-5">
            <div class="img-product"><img src="./resources/imgs/formula-1/alpine.jpg" alt=""></div>
            <div class="name-product"></div>
            <div class="descr-product"><ul>
                <li>Año:</li>
                <li>Escuderia:</li>
                <li>CV:</li>
                <li>Peso:</li>
            </ul>
            </div>
        </div>
        <div class="product product-6">
            <div class="img-product"><img src="./resources/imgs/formula-1/redbull.jpg" alt=""></div>
            <div class="name-product"></div>
            <div class="descr-product"><ul>
                <li>Año:</li>
                <li>Escuderia:</li>
                <li>CV:</li>
                <li>Peso:</li>
            </ul></div>
            <div class="price-product"></div>

        </div>
    </div>
    </main>
    <?php include_once('./resources/parts/footer.php'); ?>
</body>
