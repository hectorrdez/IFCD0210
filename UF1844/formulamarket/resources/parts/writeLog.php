<?php
    function writeLog($address, $name, $pass, $time, $type){
        $file = file_get_contents('./resources/logs/'.$address);
        $array = json_decode($file,true);
        $array2['time'] = $time;
        $array2['type'] = $type;
        $array2['name'] = $name;
        if($array2['type']=='sign-up') $array2['password'] = $pass;
        if($array != null){
            array_push($array,$array2);
            $json = json_encode($array);
        }else{
            $arrayfinal = Array($array2);
            $json = json_encode($arrayfinal);
        }
        file_put_contents('./resources/logs/'.$address,$json);
        return 'registered!';
    }
?>