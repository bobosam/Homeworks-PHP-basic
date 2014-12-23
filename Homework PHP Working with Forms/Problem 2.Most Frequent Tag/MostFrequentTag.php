<?php
require "index.html";
$string = htmlentities($_GET['enter']);
$array= explode(', ',$string);
$countArray =array_count_values($array);
arsort($countArray);

if(isset($_GET['enter'])):
    foreach($countArray as $key => $value):?>
    <p><?php echo $key;?> : <?php echo $value;?> times</p>
    <?php endforeach;?>
<?php endif;?>
<p>Most Frequent Tag is:<?php echo array_search(max($countArray),$countArray);?></p>