<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="shortcut icon" href="<?php 
    if(!isset($basePath)) echo "./resources/imgs/logo/icon.png"; else echo $basePath."resources/imgs/logo/icon.png"; ?>" type="image/x-icon">
    <?php include_once("loader.php") ?>
</head>