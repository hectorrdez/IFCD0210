<pre>
    <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($_POST['primeroperando']) && isset($_POST['segundooperando'])){
                $numero1 = intval($_POST['primeroperando']);
                $numero2 = intval($_POST['segundooperando']);
                if($numero1 > 0 && $numero2 > 0){
                    if($_POST['operador'] == 'suma'){
                        $resultado = $numero1 + $numero2;
                    }
                    if($_POST['operador'] == 'resta'){
                        $resultado = $numero1 - $numero2;
                    }
                    if($_POST['operador'] == 'multi'){
                        $resultado = $numero1 * $numero2;
                    }
                    if($_POST['operador'] == 'divi'){
                        $resultado = $numero1 / $numero2;
                    }
                    echo "El resultado de la operacion: $resultado";
                }
            }
        }
    ?>
</pre>