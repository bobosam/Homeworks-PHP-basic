<?php
$list = $_GET['list'];
$minPrice = $_GET['minPrice'];
$maxPrice = $_GET['maxPrice'];
$filter = $_GET['filter'];
$order = $_GET['order'];
$data = preg_split('/[\n\r]+/', $list, -1,PREG_SPLIT_NO_EMPTY);
$id = 0;
$products = [];
foreach($data as $line){
    $parts = explode('|', $line);
    $id ++;
    $name = htmlspecialchars(trim($parts[0]));
    $component = htmlspecialchars(trim($parts[2]));
    $components = explode(', ',$component);
    $type = htmlspecialchars((trim($parts[1])));
    $price = floatval(htmlspecialchars(trim($parts[3])));
    $dataProduct = [
        "name" => $name,
        "type" => $type,
        "components" => $components,
        "price" => $price,
        "id" => $id
         ];
    if(($maxPrice >= $price) && ($minPrice <= $price)
        && ($type == $filter || $filter == 'all' )){
    $products[] = $dataProduct;


    }

}
usort($products, function ($el1, $el2) use ($order){
    if($el1["price"] == $el2["price"]){
        return $el1["id"] - $el2["id"];
    }
    if($order == "ascending"){
        return $el1["price"] > $el2["price"] ? 1: -1;
    }
    else {
        return $el1["price"] < $el2["price"] ? 1: -1;
    }
});
$output = '';
foreach($products as $product) {
    $id = $product["id"];
    $name = $product["name"];
    $components = $product["components"];
    $price =number_format( $product["price"], 2, '.', '');
    $output .= "<div class=\"product\" id=\"product$id\">";
$output .= "<h2>$name</h2><ul>";
    foreach($components as $component){
        $output .= "<li class=\"component\">$component</li>";
    }
    $output .= "</ul><span class=\"price\">$price</span></div>";
}
echo $output;
?>


