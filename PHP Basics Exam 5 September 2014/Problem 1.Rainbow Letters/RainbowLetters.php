<?php
$text = $_GET['text'];
$red = dechex ($_GET['red']);
strlen($red)== 1 ? $red = '0'.$red :$red = $red;
$green = dechex ($_GET['green']);
strlen($green)== 1 ? $green = '0'.$green :$green = $green;
$blue =dechex ( $_GET['blue']);
strlen($blue)== 1 ? $blue = '0'.$blue :$blue = $blue;
$nth = $_GET['nth'];
$color ='#'. $red . $green . $blue;

$output = '<p>';
for($i = 0; $i < strlen($text); $i++){
    $char = htmlspecialchars($text[$i]);
    if(($i+1)%$nth == 0){
        $output .= "<span style=\"color: $color\">$char</span>";
    }
    else {
        $output .= $char;
    }
}
$output .= '</p>';
echo ($output);
?>