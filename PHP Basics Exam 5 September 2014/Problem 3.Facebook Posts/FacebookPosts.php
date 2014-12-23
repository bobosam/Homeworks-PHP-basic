<?php
date_default_timezone_set('Europe/Sofia');
$text = $_GET['text'];
$posts = preg_split('/[\n\r]+/', $text, -1, PREG_SPLIT_NO_EMPTY);
$result = '';
$output = [];
foreach($posts as $post){
    $data = explode(';', $post);
    $author = trim(htmlspecialchars($data[0]));
    $date = trim(htmlspecialchars($data[1]));
    $timestamp = strtotime($date);
    $dateString = date("j F Y", $timestamp);
    $currentPost = trim(htmlspecialchars($data[2]));
    $likes = trim(htmlspecialchars($data[3]));
    $result .="<article><header><span>$author</span>";
    $result .="<time>$dateString</time></header><main>";
    $result .="<p>$currentPost</p></main>";
    $result .="<footer><div class=\"likes\">$likes people like this</div>";
    if(strlen($data[4]) > 0){
        $comments = explode('/', htmlspecialchars(trim($data[4])));
        $result .= "<div class=\"comments\">";
        foreach($comments as $comment){
            $comment = trim($comment);
            $result .= "<p>$comment</p>";
        }
        $result .= "</div>";
    }
    $result .= "</footer></article>";
    $output[$timestamp]=$result;
    $result = '';
}
krsort($output);
echo implode("", $output);

?>