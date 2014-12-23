<?php
require_once "WordMapper.html";
if(isset($_GET['submit'])):
    $enter =htmlentities($_GET['enter']);
    $outputArray = [];
    preg_match_all('/\w+/', strtolower($enter), $outputArray);
    $countArray = array_count_values($outputArray[0]);
?>
    <table>
<?php foreach($countArray as $key => $value):?>
    <tr>
        <td class="word"><?php echo $key;?></td>
        <td><?php echo $value;?></td>
    </tr>
<?php endforeach;?>
    </table>
<?php endif;?>