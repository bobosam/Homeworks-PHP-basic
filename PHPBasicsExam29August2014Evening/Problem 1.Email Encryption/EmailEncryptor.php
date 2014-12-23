<?php
$recipient = htmlspecialchars($_GET['recipient']);
$subject = htmlspecialchars($_GET['subject']);
$body = htmlspecialchars($_GET['body']);
$key = $_GET['key'];
$formattedMes = "<p class='recipient'>$recipient</p><p class='subject'>$subject</p><p class='message'>$body</p>";
echo '|';
$keyChar = 0;
for($i = 0; $i < strlen($formattedMes); $i++){
    $asciiMessage = ord($formattedMes[$i]);
    $asciiKey = ord($key[$keyChar]);
    $keyChar ++;
    if($keyChar == strlen($key)){
        $keyChar = 0;
    }
    $multiply =dechex( $asciiKey * $asciiMessage);
    echo $multiply.'|';
}