<pre>
<?php
    $file = file_get_contents('./resources/logs/users.json');
    $array =json_decode($file, true);
    var_dump($array);
    $result = (array_search('hectorrdez',$array,false)); //
   echo $result;

?>
</pre>  