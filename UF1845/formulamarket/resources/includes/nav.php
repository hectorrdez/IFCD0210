<nav <?php if(isset($style)) echo('class="'.$style.'"') ?>>
    <button><a href="<?php
        if(!isset($basePath)) echo "./"; else echo ($basePath); ?>" target="_self">Inicio</a></button>
    <button><a href="<?php
        if(!isset($basePath)) echo "./promos"; else echo ($basePath."promos"); ?>" target="_self">Promociones</a></button>
    <button><a href="<?php
        if(!isset($basePath)) echo "./categories"; else echo ($basePath."categories"); ?>" target="_self">Categorias</a></button>
    <button><a href="<?php
        if(!isset($basePath)) echo "./contact"; else echo ($basePath."contact"); ?>" target="_self">Contacto</a></button>
    <button class="login"><a href="<?php
        if(!isset($basePath)) echo "./login"; else echo ($basePath."login"); ?>" target="_self"><?php
                                                                if (isset($_SESSION['name'])) {
                                                                    echo "Hola, " . $_SESSION['name'];
                                                                } else {
                                                                    echo "Hola, Identificate";
                                                                }
                                                                ?></a></button>
</nav>