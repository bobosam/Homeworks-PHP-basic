<?php
require 'index.html';
if (isset($_GET['number']) && ($_GET['number'] != '') && ($_GET['number'] > 0)):
    $number = $_GET['number'];
?>
    <table>
        <tr>
            <th>Year</th>
            <th>January</th>
            <th>February</th>
            <th>March</th>
            <th>April</th>
            <th>May</th>
            <th>June</th>
            <th>July</th>
            <th>August</th>
            <th>September</th>
            <th>October</th>
            <th>November</th>
            <th>December</th>
            <th>Total:</th>
        </tr>
<?php for($i = 0; $i < $number; $i++):
    $year = 2014 - $i;
    $total = 0;
    ?>
    <tr>
        <td><?= $year;?></td>
        <?php for($j = 0;$j < 12; $j++):
            $currentExpenses = rand(0,999);
            $total += $currentExpenses;
        ?>
        <td><?= $currentExpenses;?></td>
        <?php endfor;?>
        <td id="total"><?= $total;?></td>
    </tr>
    <?php endfor;?>
    </table>
<?php endif;?>
