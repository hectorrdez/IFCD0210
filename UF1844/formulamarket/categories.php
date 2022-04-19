<?php 
    session_start();
    $title = 'Categorias';
    $_SESSION['last'] = 'categories.php';
    if(!isset($_SESSION['name'])){
        header('Location: login.php');
    }
    include_once('./resources/parts/head.php');
?>
<body>
    <?php include_once('./resources/parts/nav.php') ?>
    <main class="alone">
        <h2 class="categoryTitle">SELECCIONA LA CATEGORIA</h2>
        <div class="categories">
            <div class="formula-1 category"><a href="formula-classic.php" target="_self"><img src="resources/imgs/formula-classic/renault-r26.jpg" alt=""></a>Formula Classic</div>
            <div class="formula-e category"><a href="formula-1.php" target="_self"><img src="resources/imgs/formula-1/Ferrari1.jpg" alt=""></a>Formula 2022</div>
        </div>
    </main>
    <?php include_once('./resources/parts/footer.php') ?>
</body>
</html>