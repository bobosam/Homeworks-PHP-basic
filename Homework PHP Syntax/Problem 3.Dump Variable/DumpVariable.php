<?php

$data = array("hello", 15, 1.234, array(1,2,3), (object)[2,34]);

function varDump($input){
    if(is_numeric($input)){
        var_dump($input)."\n";
    }
    else{
        echo gettype($input)."\n";
    }
}

for($i = 0; $i < sizeof($data); $i++){
    varDump($data[$i]);
}

?>