<?php
$keys =$_GET['keys'];
$text =$_GET['text'];
$keysPattern = '/([A-Za-z_]+).+\d([A-Za-z_]+)/';
preg_match_all($keysPattern, $keys, $startEND, PREG_SET_ORDER);
//var_dump($startEND);
$sum = null;
if (count($startEND[0]) <3){
    $output = '<p>A key is missing</p>';
   }
else{
    $starKey = htmlspecialchars($startEND[0][1]);
    $endKey = htmlspecialchars($startEND[0][2]);
  $textPattern ='/'.$starKey .'([0-9.]+)'.$endKey.'/';
   // var_dump($textPattern);
    preg_match_all($textPattern, $text, $data, PREG_SET_ORDER);
   // var_dump($data);
    foreach($data as $number){
        if(is_numeric($number[1])){
            $tmp = floatval($number[1]);
            //echo $tmp.' ';
            $sum += $tmp;
        }
    }
    if($sum == null){
        $output = "<p>The total value is: <em>nothing</em></p>";
    }
    else {
        $output = "<p>The total value is: <em>$sum</em></p>";
    }
}
echo $output;