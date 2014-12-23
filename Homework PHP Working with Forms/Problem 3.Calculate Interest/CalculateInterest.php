<?php
require "index.html";
if(isset($_GET['amount'], $_GET['currency'], $_GET['interest'], $_GET['period'])) {
    $amount = htmlentities($_GET['amount']);
    $currency = htmlentities($_GET['currency']);
    $interest = htmlentities($_GET['interest']);
    $period = htmlentities($_GET['period']);
    $result = $amount * pow((1 + ($interest / 100)/12), $period);
    echo $currency.number_format($result,2,".","");
}

