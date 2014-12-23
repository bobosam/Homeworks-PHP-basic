<?php

$data = array(1234, 145, 15, 247);

function findDigits($input){
    if($input > 999){
        $input=999;
    }
    $check = true;
    $result = [];

    for($i = 100;$i <= $input; $i++){
        $firstDigit = $i %10 ;
        $secondDigit = $i/10 %10;
        $thirdDigit = $i/100 %10;

        if(($firstDigit != $secondDigit) && ($firstDigit != $thirdDigit) && ($secondDigit != $thirdDigit) ){
            array_push($result,$i);
            $check = false;
        }
    }

    if($check == true){
        echo 'no'."\n";
    }
    else{
        echo implode(',',$result)."\n";
    }
}

for($i = 0;$i < sizeof($data); $i++){
    findDigits($data[$i]);
}
?>