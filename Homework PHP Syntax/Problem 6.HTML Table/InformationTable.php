<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>information-table</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
    $firstTable = array('Name' => 'Gosho', 'Phone number' => '0882-321-423', 'Age' => '24', 'Address' => 'Hadji Dimitar');
    $secondTable = array('Name' => 'Pesho', 'Phone number' => '0884-888-888', 'Age' => '67', 'Address' => 'Suhata Reka');
    ?>
    <table>
        <?php createTable($firstTable);?>
    </table>
    <br>
    <table>
        <?php createTable($secondTable);?>
    </table>

    <?php function createTable($input){
        foreach ($input as $key => $value):?>
            <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo $value; ?></td>
            </tr>
        <?php endforeach;
    }?>
</body>
</html>