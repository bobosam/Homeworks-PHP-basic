<?php
$now = new DateTime();
$startTime = new DateTime( $now->format('m/01/Y'));
$endTime= new DateTime( $now->format('m/t/Y'));

while ($startTime <= $endTime) {
    $dateString =$startTime->format('d-m-Y') . "\n";
    $dayOfWeek = date('N', strtotime($dateString));
    if ($dayOfWeek == '7') {
        echo date_format($startTime, 'jS F, Y')."\n";
    }
    $startTime->add(new DateInterval('P1D'));
}