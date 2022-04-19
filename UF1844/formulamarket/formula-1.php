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
            <div class="img-product"><img src="./resources/imgs/formula-1/mercedes.jpg" alt="mercedes w13"></div>
            <div class="name-product">W13</div>
            <div class="descr-product"><ul>
                <li>Año: 2022</li>
                <li>Escuderia: Mercedes</li>
                <li>CV: 980cv/hp</li>
                <li>Peso: 797kg aprox.</li>
            </ul></div>
            <div class="price-product">140.000.000 $</div>

        </div>
        <div class="product product-2">
            <div class="img-product"><img src="./resources/imgs/formula-1/Ferrari1.jpg" alt="ferrari 2022"></div>
            <div class="name-product">F1-75</div>
            <div class="descr-product"><ul>
                <li>Año: 2022</li>
                <li>Escuderia: Ferrari</li>
                <li>CV: 1060cv/hp</li>
                <li>Peso: 795kg aprox.</li>
            </ul></div>
            <div class="price-product">140.000.000 $</div>

        </div>
        <div class="product product-3">
            <div class="img-product"><img src="./resources/imgs/formula-1/astonmartin.jpg" alt="aston martin 2022"></div>
            <div class="name-product">AMR-22</div>
            <div class="descr-product"><ul>
                <li>Año:2022</li>
                <li>Escuderia: Aston Martin</li>
                <li>CV: 980cv/hp</li>
                <li>Peso:</li>
            </ul></div>
            <div class="price-product">140.000.000 $</div>

        </div>
        <div class="product product-4">
            <div class="img-product"><img src="./resources/imgs/formula-1/mclaren.jpg" alt="mclaren 2022"></div>
            <div class="name-product">MCL-36</div>
            <div class="descr-product"><ul>
                <li>Año: 2022</li>
                <li>Escuderia: McLaren</li>
                <li>CV: 980cv/hp</li>
                <li>Peso:798kg aprox.</li>
            </ul></div>
            <div class="price-product">140.000.000 $</div>

        </div>
        <div class="product product-5">
            <div class="img-product"><img src="./resources/imgs/formula-1/alpine.jpg" alt="alpine renault 2022"></div>
            <div class="name-product">A-522</div>
            <div class="descr-product"><ul>
                <li>Año: 2022</li>
                <li>Escuderia: Alpine Renault</li>
                <li>CV: 980cv/hp</li>
                <li>Peso: 798kg aprox.</li>
            </ul>
            </div>
            <div class="price-product">140.000.000 $</div>
        </div>
        <div class="product product-6">
            <div class="img-product"><img src="./resources/imgs/formula-1/redbull.jpg" alt="redbull 2022 rb22"></div>
            <div class="name-product">RB-18</div>
            <div class="descr-product"><ul>
                <li>Año: 2022</li>
                <li>Escuderia: RedBull</li>
                <li>CV: 1060cv/hp</li>
                <li>Peso: 795kg aprox.</li>
            </ul></div>
            <div class="price-product">140.000.000 $</div>

        </div>
    </div>
    </main>
    <?php include_once('./resources/parts/footer.php'); ?>
</body>
