<?php
require_once "URLReplacer.html";
if (isset($_GET['submit'])) {
    $text = $_GET['text'];
    echo htmlspecialchars($text)."<br/>";
    preg_match_all('/(?i)<a\s+href="([^"]+)">([^<]+)<\/a>/', $text, $matches);
    for ($i = 0; $i < count($matches[0]); $i++) {
        $replaceString = "[URL=" . $matches[1][$i] . "]" . $matches[2][$i] . "[URL]";
        $text = str_replace($matches[0][$i], $replaceString, $text);
    }
    echo htmlentities($text);
}
?>
