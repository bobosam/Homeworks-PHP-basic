<?php
require "index.html";
$string = htmlentities($_GET['enter']);
$array = explode(", ",$string);

if(isset($_GET['enter'])):
    for ($i = 0;$i < sizeof($array);$i++):?>
    <p><?php echo $i;?> : <?php echo $array[$i];?></p>
    <?php endfor;?>
<?php endif;?>


