<?php
$list = $_GET['priceList'];
$pattern = '/<tr>\W*<td>([^<]+)<\/td>\W*<td>([^<]+)<\/td>\W*<td>([^<]+)<\/td>\W*<td>([^<]+)<\/td>\W*<\/tr>/';
preg_match_all($pattern,$list, $parts, PREG_SET_ORDER );
foreach($parts as $part){
$product = array(
                'product' =>html_entity_decode(trim($part[1])),
                'price' => trim($part[3]),
                'currency' => trim($part[4])
                );
    $category =html_entity_decode( trim($part[2]));
    if(!isset($products[$category])){
        $products[$category] = array();
    }
    $products[$category][]= $product;
}
ksort($products);
foreach($products as $key => $value){
    usort($value, function($el1, $el2){
   return strcmp($el1['product'], $el2['product']);
    });
    $products[$key] = $value;
}
echo json_encode($products);



