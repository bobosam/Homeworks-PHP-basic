<?php
$column = $_GET['column'];
$order = $_GET['order'];
$students = $_GET['students'];
$lines = preg_split('/[\n\r]+/', $students, -1,PREG_SPLIT_NO_EMPTY);
$id = 1;
$data = array();
foreach($lines as $line){
    $parts = explode(', ', $line);
        $student = [
            "username" => htmlspecialchars(trim($parts[0])),
            "email" => htmlspecialchars(trim($parts[1])),
            "result" => floatval(htmlspecialchars(trim($parts[3]))),
            "id" => $id,
            "type" => htmlspecialchars($parts[2])
                 ];
    $data[] = $student;
    $id++;
}
switch ($column){
    case 'id': usort($data, 'sortByID');break;
    case 'username' : usort($data, 'sortByUsername');break;
    case 'result': usort($data, 'sortByResult');break;
}
if($order == 'descending'){
    $data = array_reverse($data);
}
$output = '<table><thead><tr><th>Id</th><th>Username</th><th>Email</th><th>Type</th><th>Result</th></tr></thead>';
for($i = 0; $i < count($data); $i++){
    $id = $data[$i]['id'];
    $username = $data[$i]['username'];
    $email = $data[$i]['email'];
    $type = $data[$i]['type'];
    $result = $data[$i]['result'];
    $output .= "<tr><td>$id</td><td>$username</td><td>$email</td><td>$type</td><td>$result</td></tr>";
}
$output .= "</table>";
echo $output;

function sortByID($el1 , $el2){
    return $el1['id'] > $el2['id'] ? 1: -1;
}

function sortByUsername($el1, $el2){
    $result = strcmp($el1['username'], $el2['username']);
    if($result == 0){
        $result = sortByID($el1, $el2);
    }
    return $result;
}

function sortByResult($el1, $el2){
    if($el1['result'] == $el2['result']){
        $result = sortByID($el1, $el2);
    }
    else{
        $result =$el1['result'] > $el2['result'] ? 1: -1;
    }
    return $result;
}

