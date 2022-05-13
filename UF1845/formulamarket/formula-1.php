<?php
    session_start();
    $_SESSION['last'] = 'formula-1';
    if(!isset($_SESSION['name'])) header('Location: login.php');
    $title = 'Formula 1';
    include_once('./resources/includes/head.php');
?>
<body>
    <?php include_once('./resources/includes/nav.php'); ?>
    <main class="alone">
    <div class="wrapper-6">
       
    </div>
    </main>
    <?php include_once('./resources/includes/footer.php'); ?>
</body>
