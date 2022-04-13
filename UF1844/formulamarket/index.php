<?php session_start() ?>
<?php $title = "Inicio" ?>
<?php include_once("./resources/parts/head.php") ?>
<body>
    <?php include_once("./resources/parts/header.php") ?>
    <main>
        <div class="sliderContainer">
            <div class="sliderSection">
                <div class="slider slide-1"><img src="./resources/imgs/slider/1.jpg" alt="slider-1"></div>
                <div class="slider slide-2"><img src="./resources/imgs/slider/2.jpg" alt="slider-2"></div>
                <div class="slider slide-3 active"><img src="./resources/imgs/slider/3.jpg" alt="slider-3"></div>
                <div class="slider slide-4"><img src="./resources/imgs/slider/4.jpg" alt="slider-4"></div>
                <div class="slider slide-5"><img src="./resources/imgs/slider/5.jpg" alt="slider-5"></div>
            </div>
            <div class="control arrowPrev"><</div>
            <div class="control arrowNext">></div>
        </div>
    </main>
    <?php include_once("./resources/parts/footer.php") ?>
</body>
</html>