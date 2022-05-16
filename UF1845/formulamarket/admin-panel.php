<?php
session_start();
if (isset($_SESSION['role']) && $_SESSION['role'] === 'Admin') {
} else if (!isset($_SESSION['role'])) {
    header('Location: login');
} else {
    header('Location: ./');
}
$title = 'Admin Panel | Formula Market';
include_once('./resources/includes/head.php');
?>

<body>
    <?php include_once('./resources/includes/nav.php') ?>
    <?php include_once('./resources/functions/connection.php') ?>
    <main class="alone">
        <div class="users">
            <?php
            $select = 'select * from users';
            $users = $connection->query($select);
            if (mysqli_affected_rows($connection) == 0) {
                echo 'No se han encontrado Usuarios';
            } else {
                echo '<table border="1">';
                $user = mysqli_fetch_all($users);
                var_dump($user);
                echo '</table>';
            }
            ?>
        </div><br><br>
        <div class="entrys">
            <?php
            $select = 'select * from product';
            $products = $connection->query($select);
            if (mysqli_affected_rows($connection) == 0) {
                echo 'No se han encontrado Productos';
            } else {
                echo '<table border="1">';
                $product = mysqli_fetch_assoc($products);
                for($i = 0; $i< sizeof(array_keys($product)); $i++){
                    var_dump($product);
                }
                echo '</table>';
            }
            ?>
        </div>
    </main>
    <?php include_once('./resources/includes/footer.php') ?>
</body>

</html>