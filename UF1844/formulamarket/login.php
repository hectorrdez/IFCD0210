<?php session_start()  ?>
<?php 
if(isset($_SESSION['name'])){
    $title = "Cerrar Sesion";
}else{
    $title = "Iniciar Sesion";
}?>
<?php include_once('./resources/parts/writeLog.php') ?>
<?php include_once("./resources/parts/head.php") ?>
<body class="login">
    <?php include_once("./resources/parts/nav.php") ?>
    <main>
    <?php if(isset($_SESSION['name'])){
        include_once("./resources/parts/signout.php");
    }else{
        include_once("./resources/parts/signin.php");
    }
    ?>
    </main>
    <?php include_once("./resources/parts/footer.php") ?>
    <script src="/resources/code/redirect.js"></script>
</body>