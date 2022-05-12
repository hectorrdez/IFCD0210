<?php
    $connection = mysqli_connect("localhost","root", "","formulamarket");
    if($connection -> connect_errno){
        header('Location: '.$basePath.'fail');
    }
?>