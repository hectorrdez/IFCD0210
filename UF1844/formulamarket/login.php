<?php session_start ?>
<?php 
if(isset($_SESSION['name'])){
    $title = "Cerrar Sesion";
}else{
    $title = "Iniciar Sesion";
} 
?>
<?php include_once("./resources/parts/head.php") ?>
<body>
    
</body>
