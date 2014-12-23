<?php
$errorLog =($_GET['errorLog']);
$pattern = "/Exception in thread \".*\" java.*\.(.*):.*\n.*?\.(.*?)\((.*?):(\d+)/";
preg_match_all($pattern, $errorLog, $data);

$output = '<ul>';
for($i = 0; $i < sizeof($data[0]); $i++){
    $line = htmlspecialchars($data[4][$i]);
    $method = htmlspecialchars($data[2][$i]);
    $exception = htmlspecialchars($data[1][$i]);
    $fileName = htmlspecialchars(($data[3][$i]));
    $output .= "<li>line <strong>$line</strong> - ";
    $output .= "<strong>$exception</strong> in ";
    $output .= "<em>$fileName:$method</em></li>";
}
$output .= "</ul>";
echo $output;
?>