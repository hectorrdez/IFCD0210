<?php 
    $connection = mysqli_connect("localhost", "root", "", "bd_ciclismo");
    if($connection->connect_errno){
        die('No algo no ha funcionado');
    }    
?>