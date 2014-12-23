<?php
require 'index.html';
if (isset($_GET['start'], $_GET['end']) && ($_GET['start'] > 1) && ($_GET['end'] > 1)):
    $start = $_GET['start'];
    $end= $_GET['end'];
for($i = $start; $i <= $end; $i++):
    $check = isPrime($i);
    if($check == true):
        if($i == $end):?>
        <b><?= $i;?></b>
        <?php else:?>
        <b><?= $i;?>, </b>
        <?php endif;?>
<?php else:
        if($i == $end):?>
        <span><?= $i;?></span>
        <?php else:?>
        <span><?= $i;?>, </span>
    <?php endif;?>
<?php endif;?>
<?php endfor;?>
<?php endif;?>
<?php function isPrime($number){
    $check = true;
    for($i=2 ; $i <= sqrt($number); $i++){
        if($number % $i == 0){
            $check = false;
            return $check;
        }
    }
    return $check;
}
?>
