<?php
    echo "<pre>";
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        var_dump($_POST);
    }else{
        var_dump($_GET);
    }
    echo "</pre>";
?>