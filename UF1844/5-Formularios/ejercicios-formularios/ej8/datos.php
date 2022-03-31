<?php
    echo "<pre>";
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        var_dump($_POST);
    }else if($_SERVER['REQUEST_METHOD'] === 'GET'){
        var_dump($_GET);
    }
    echo "</pre>";
?>