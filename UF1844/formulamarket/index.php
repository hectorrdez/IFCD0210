<?php session_start() ?>
<?php $title = "Inicio" ?>
<?php include_once("./resources/parts/head.php") ?>

<body>
    <?php include_once("./resources/parts/header.php") ?>
    <main>
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./resources/imgs/slider/1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./resources/imgs/slider/2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./resources/imgs/slider/3.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./resources/imgs/slider/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./resources/imgs/slider/5.jpg" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        <script src="./resources/code/load-slider.js"></script>
    </main>
    <?php include_once("./resources/parts/footer.php") ?>
</body>

</html>