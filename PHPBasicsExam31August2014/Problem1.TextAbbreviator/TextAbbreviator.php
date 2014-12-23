<?php
$list = $_GET['list'];
$maxSize = $_GET['maxSize'];
$lines = preg_split('/[\n\r]+/', $list,-1, PREG_SPLIT_NO_EMPTY);
$result ='<ul>';
foreach($lines as $line){
    $line = trim($line);
    if(strlen($line) <= intval($maxSize)){
        $line = htmlspecialchars($line);
        $result .= "<li>$line</li>";
    }
    else{
        $newLine = substr($line, 0, intval($maxSize)) . '...';
        $newLine = htmlspecialchars($newLine);
        $result .= "<li>$newLine</li>";
    }

}
$result .= '</ul>';
echo ($result);
?>

