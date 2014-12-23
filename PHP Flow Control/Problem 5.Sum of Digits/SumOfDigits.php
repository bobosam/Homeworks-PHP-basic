<?php
require 'index.html';
if(isset($_GET['enter']) && ($_GET['enter'] != '')):
    $enter = $_GET['enter'];
    $arrayEnter = preg_split('/[, ]+/', $enter);
?>
    <table>
        <?php foreach($arrayEnter as $number):
            if(is_numeric($number)):
                $sum = sumDigits($number);
            else:
                $sum = 'I cannot sum that';
            endif;?>
        <tr>
            <td><?= $number;?></td>
            <td><?= $sum;?></td>
        </tr>
        <?php endforeach;?>
    </table>
<?php endif;?>

<?php function sumDigits($number){
    $arrayNumber = preg_split('//',$number, -1, PREG_SPLIT_NO_EMPTY);
    $sum = array_sum($arrayNumber);
    return $sum;
}
?>