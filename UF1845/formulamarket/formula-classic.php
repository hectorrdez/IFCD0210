<?php
    session_start();
    $_SESSION['last'] = 'formula-classic';
    if(!isset($_SESSION['name'])) header('Location: login.php');
    $title = 'Formula Classic';
    include_once('./resources/parts/head.php');
?>
<body>
    <?php include_once('./resources/parts/nav.php'); ?>
    <main class="alone">
        <div class="wrapper-6">
            <div class="product product-1">
                <div class="img-product"><img src="./resources/imgs/formula-classic/BrawnGP.jpg" alt="Brawn gp 2009"></div>
                <div class="name-product">BGP-001</div>
                <div class="descr-product"><ul>
                    <li>Año: 2009</li>
                    <li>Escuderia: Brawn GP</li>
                    <li>CV: 800cv/hp</li>
                    <li>Peso: 650kg aprox.</li>
                </ul></div>
                <div class="price-product">2.000.000 $</div>
            </div>
            <div class="product product-2">
                <div class="img-product"><img src="./resources/imgs/formula-classic/Ferrari_312T.jpg" alt="Ferrari 312T"></div>
                <div class="name-product">F-312T</div>
                <div class="descr-product"><ul>
                    <li>Año: 1975</li>
                    <li>Escuderia: Ferrari</li>
                    <li>CV: 500cv/hp</li>
                    <li>Peso: 450kg aprox.</li>
                </ul></div>
                <div class="price-product">4.000.000 $</div>
            </div>
            <div class="product product-3">
                <div class="img-product"><img src="./resources/imgs/formula-classic/lotus-72d.jpg" alt="Lotus 72d"></div>
                <div class="name-product">LT-76D</div>
                <div class="descr-product"><ul>
                    <li>Año: 1970</li>
                    <li>Escuderia: Lotus</li>
                    <li>CV: 440cv/hp</li>
                    <li>Peso: 550kg aprox.</li>
                </ul></div>
                <div class="price-product">2.500.000 $</div>
            </div>
            <div class="product product-4">
                <div class="img-product"><img src="./resources/imgs/formula-classic/renault-r26.jpg" alt="renault r26"></div>
                <div class="name-product">R-26</div>
                <div class="descr-product"><ul>
                    <li>Año: 2006</li>
                    <li>Escuderia: Renault</li>
                    <li>CV: 1000cv/hp</li>
                    <li>Peso: 650kg aprox.</li>
                </ul></div>
                <div class="price-product">20.000.000 $</div>
            </div>
            <div class="product product-5">
                <div class="img-product"><img src="./resources/imgs/formula-classic/McLaren-MP4.jpg" alt="McLaren MP4/4"></div>
                <div class="name-product">MCL-MP4/4</div>
                <div class="descr-product"><ul>
                    <li>Año: 1988</li>
                    <li>Escuderia: McLaren</li>
                    <li>CV: 1350cv/hp</li>
                    <li>Peso: 540kg aprox.</li>
                </ul></div>
                <div class="price-product">5.000.000 $</div>
            </div>
            <div class="product product-6">
                <div class="img-product"><img src="./resources/imgs/formula-classic/ferrari-f2004.jpg" alt="Ferrari 2004"></div>
                <div class="name-product">F-2004</div>
                <div class="descr-product"><ul>
                    <li>Año: 2004</li>
                    <li>Escuderia: Ferrari</li>
                    <li>CV: 900cv/hp</li>
                    <li>Peso: 605kg aprox.</li>
                </ul></div>
                <div class="price-product">15.000.000 $</div>
            </div>
        </div>
    </main>
    <?php include_once('./resources/parts/footer.php'); ?>
</body>