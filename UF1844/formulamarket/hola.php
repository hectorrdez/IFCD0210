<pre>
<?php
    $file = file_get_contents('./resources/logs/user_email.json');
    $array = json_decode($file,true);
    print_r($array);
    echo $array['email'];
    
?>
</pre>