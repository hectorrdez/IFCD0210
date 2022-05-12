<?php session_start()  ?>
<?php 
if(isset($_SESSION['name'])){
    $title = "Cerrar Sesion";
}else{
    $title = "Iniciar Sesion";
}?>
<?php include_once('./resources/includes/writeLog.php') ?>
<?php include_once("./resources/includes/head.php") ?>
<body class="login">
    <?php include_once("./resources/includes/nav.php") ?>
    <main>
    <?php if(isset($_SESSION['name'])){
        include_once("./resources/includes/signout.php");
    }else{
        include_once("./resources/includes/signin.php");
    }
    ?>
    </main>
    <?php include_once("./resources/includes/footer.php") ?>
    <script src="/resources/code/redirect.js"></script>
</body>