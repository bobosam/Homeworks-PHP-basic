<?php
date_default_timezone_set('UTC');
$text = $_GET['text'];
$min = $_GET['min-price'];
$max = $_GET['max-price'];
$sort = $_GET['sort'];
$order = $_GET['order'];
$lines = preg_split('/[\n\r]+/', $text, -1, PREG_SPLIT_NO_EMPTY);
$data = array();
$min = floatval($min);
$max = floatval($max);
foreach($lines as $line) {
    $inputData = explode('/', $line);

    $dateString = htmlspecialchars(trim($inputData[4]));
    $dateArea = explode('-', $dateString);
    $date = $dateArea[2].'-'.$dateArea[1].'-'.$dateArea[0];
        $book = [
        "author" => htmlspecialchars(trim($inputData[0])),
        "name" => htmlspecialchars(trim($inputData[1])),
        "genre" => htmlspecialchars(trim($inputData[2])),
        "price" =>floatval( htmlspecialchars(trim($inputData[3]))),
        "date" =>strtotime( $date),
        "info" => htmlspecialchars(trim($inputData[5])),
        "dateString" => $dateString
             ];
    if($book['price'] >= $min && $book['price'] <= $max){
        $data[] = $book;
    }
}
switch ($sort){
    case 'genre':usort($data, 'sortByGenre');break;
    case 'author': usort($data, 'sortByAuthor');break;
    case 'publish date': usort($data, 'sortByDate');break;
}

if($order == 'descending'){
    $data = array_reverse($data);
}
$output = "";
for($i = 0; $i < count($data); $i++){
    $genre = $data[$i]['genre'];
    $name = $data[$i]['name'];
    $author = $data[$i]['author'];
    $price =  $data[$i]['price'];
    $price = number_format($price,2, '.','');
    $info = $data[$i]['info'];
    $dateString = $data[$i]['dateString'];
    $output .= "<div><p>$name</p><ul><li>$author</li><li>$genre</li><li>$price</li><li>$dateString</li><li>$info</li></ul></div>";

}
echo $output;

function sortByGenre($el1, $el2){
    if($el1['genre'] == $el2['genre']){
        $result = sortByDate($el1, $el2);
    }
    else{
        $result = strcmp($el1['genre'], $el2['genre']);
    }
    return $result;
}

function sortByAuthor($el1, $el2){
    if($el1['author'] == $el2['author']){
        $result = sortByDate($el1, $el2);
    }
    else{
        $result = strcmp($el1['author'], $el2['author']);
    }
    return $result;
}

function sortByDate($el1, $el2)

{
    $p = $GLOBALS['order'];
    $h = $GLOBALS['sort'];
    if($p == 'descending' && $h !=  'publish date') {
        return $el1['date'] < $el2['date'] ? 1 : -1;
    }
    else {
        return $el1['date'] > $el2['date'] ? 1 : -1;
    }
}