<?php
$text = $_GET["text"];
$output = '';
$letter = '';
for($i = 0; $i < strlen($text); $i++){
$char = $text[$i];
if(ctype_alpha($char)){
$letter .= $char;
}
else{
$output .= processWord($letter);
$letter = '';
$output .= $char;
}
}
$output .= processWord($letter);
echo '<p>' . htmlspecialchars($output).'</p>';

function processWord($letter){
if(ctype_upper($letter)){
$reverse = strrev($letter);
if($letter == $reverse){
return double($letter);
}
else return $reverse;
}
return $letter;
}

function double($letter){
$doubleLetter='';
for ($i = 0; $i < strlen($letter); $i++){
$doubleLetter .= ($letter[$i].$letter[$i]);
}
return $doubleLetter;
}