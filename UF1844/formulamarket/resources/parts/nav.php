<nav>
            <button><a href="./" target="_self">Inicio</a></button>
            <button><a href="./promos.php" target="_self">Promociones</a></button>
            <button><a href="./categories.php" target="_self">Categorias</a></button>
            <button><a href="./contact.php" target="_self">Contacto</a></button>
            <button class="login"><a href="./login.php" target="_self"><?php
                if(isset($_SESSION['name'])){
                    echo "Hola, ".$_SESSION['name'];
                }else{
                    echo "Hola, Identificate";
                }
            ?></a></button>
        </nav>