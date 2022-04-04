<pre>
<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['numeros'])){
            echo "Los datos vienen por POST y su valor es: <br>";
            var_dump($_POST);

            echo "El campo 'numeros' existe y su valor es: <br>";
            var_dump($_POST['numeros']);
            
            $number = intval($_POST['numeros']);
            if(gettype($number) == 'integer' && $number > 0){
                echo "<br>El valor introducido es numerico y su valor es: <br>";
                echo "$_POST[numeros]<br>";
            }else{
                echo "<br>El valor introducido no es numerico";
            }
        }
    }
?>
</pre>