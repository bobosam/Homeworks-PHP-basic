<?php

function sumTwoNumbers($firstNumber,$secondNumber){
    $sum =number_format(($firstNumber + $secondNumber),2,".","");
    echo '$firstNumber + $secondNumber = '."$firstNumber + $secondNumber = $sum \n";
}

$data = array(2, 5, 1.567808, 0.356, 1234.5678, 333);
for($i = 0;$i < sizeof($data); $i +=2){
    sumTwoNumbers($data[$i],$data[$i+1]);
}

?>