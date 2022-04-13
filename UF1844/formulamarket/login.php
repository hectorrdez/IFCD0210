<?php session_start()  ?>
<?php 
if(isset($_SESSION['name'])){
    $title = "Cerrar Sesion";
}else{
    $title = "Iniciar Sesion";
}?>
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
<?php
    function writeLog($address, $name, $time, $type){
        $file = file_get_contents('./resources/logs/'.$address);
        $array = json_decode($file,true);
        $array2['name'] = $name;
        $array2['time'] = $time;
        $array2['type'] = $type;
        if($array != null){
            array_push($array,$array2);
            $json = json_encode($array);
        }else{
            $arrayfinal = Array($array2);
            $json = json_encode($arrayfinal);
        }
        file_put_contents('./resources/logs/'.$address,$json);
    }
?>