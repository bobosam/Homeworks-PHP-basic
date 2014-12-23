<?php
require 'index.html';
if(isset($_GET['enter']) && $_GET['enter'] != ''):
$enter = $_GET['enter'];
$cars = preg_split('/[, ]+/',$enter);
$colors =array('green', 'blue', 'yellow', 'black', 'red');
?>
<table>
    <tr>
        <th>Car</th>
        <th>Color</th>
        <th>Count</th>
    </tr>
    <?php
    foreach($cars as $car):
        $currentCount = rand(1,5);
        $currentColor = array_rand($colors);
    ?>
        <tr>
            <td><?= $car;?></td>
            <td><?= $colors[$currentColor]; ?></td>
            <td><?= $currentCount;?></td>
        </tr>
    <?php endforeach;?>
</table>
<?php endif;?>