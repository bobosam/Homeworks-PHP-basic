<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>square-root-sum</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
    <table>
        <tr>
            <th>Number</th>
            <th>Square</th>
        </tr>
<?php
$square = 0;
$sum = 0;
for ($i = 0; $i <= 100; $i +=2):
    $square = sqrt($i);
    $sum += $square;
?>
    <tr>
        <td><?= $i ?></td>
        <td><?= round($square, 2) ?></td>
    </tr>
<?php endfor ?>
        <tr>
            <td id="total">Total:</td>
            <td><?= round($sum,2) ?></td>
        </tr>
    </table>

</body>
</html>