<?php
$text =$_GET['text'];
$lineLength =intval($_GET['lineLength']);
while(strlen($text)%$lineLength != 0){
    $text .= " ";
    $length = strlen($text);
}
for($i = strlen($text)-1; $i >= $lineLength; $i--){
    $k = $i-$lineLength;
    while($text[$i] == ' ' && $k >= 0){
        $text[$i] = $text[$k];
        $text[$k] = ' ';
        $k -= $lineLength;
   }
}
$string = '<table>';
for($i = 0; $i < strlen($text); $i += $lineLength){
    $string .= '<tr>';
    for($j = 0; $j < $lineLength;$j++){
        $p = $i + $j;
        $char = htmlspecialchars($text[$p]);
        $string .= "<td>$char</td>";
    }
    $string .= '</tr>';
}
$string .= '<table>';
echo $string;
