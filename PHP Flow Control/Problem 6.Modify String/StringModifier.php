<?php
require 'index.html';

if(isset($_GET['enter'], $_GET['choice'])):
    $string = $_GET['enter'];
    $choice = $_GET['choice'];
switch ($choice) {
    case 1:$result = checkPalindrome($string);echo $result;break;
    case 2:$result = reverseString($string);echo $result;break;
    case 3:$result = splitString($string);echo $result;break;
    case 4:$result = hashString($string);echo $result;break;
    case 5:$result = shuffleString($string);echo $result;break;
}
endif;

function checkPalindrome($string){
    $arrayString = preg_split('//', $string);
    $reverseArray = array_reverse($arrayString);
    $reverseString = implode('',$reverseArray);
    if($reverseString == $string){
        $result = $string.' is a palindrome!';
    }
    else{
        $result = $string . ' is not a palindrome!';
    }
    return $result;
}

function reverseString($string){
    $arrayString = preg_split('//', $string);
    $reverseArray = array_reverse($arrayString);
    $result = implode('',$reverseArray);
    return $result;
}

function splitString($string){
    preg_match_all('/[A-Za-z]/', $string, $arrayLetters);
    $result = implode(' ', $arrayLetters[0]);
    return $result;
}

function hashString($string){
    $result = crypt($string,'salt');
    return $result;
}

function shuffleString($string){
    $result = str_shuffle($string);
    return $result;
}







