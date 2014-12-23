<?php
$list =trim( $_GET['list']);
$length = intval($_GET['length']);
$userNames = preg_split('/[\n\r]+/',$list, -1, PREG_SPLIT_NO_EMPTY);
$output = '<ul>';
for($i = 0; $i < count($userNames); $i++){
    $tmp = trim($userNames[$i]);
    if(strlen($tmp) >= $length){
        $tmp = htmlspecialchars($tmp);
        $output .= "<li>$tmp</li>";
    }
    if(isset($_GET['show']) && (strlen($tmp) < $length)){
        $tmp = htmlspecialchars(($tmp));
        $output .= "<li style=\"color: red;\">$tmp</li>";
    }
}
$output .= '</ul>';
echo $output;