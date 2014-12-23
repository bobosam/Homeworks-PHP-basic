<?php
require_once "TextFilter.html";
if(isset($_GET['submit'])):
    $inputString = htmlentities($_GET['enter']);
    $banlist = preg_split('/, /', htmlentities($_GET['banlist']));
foreach($banlist as $ban):
    $replaceString = str_repeat("*",strlen($ban));
    $inputString= str_ireplace($ban, $replaceString, $inputString);
endforeach;?>
<p><?php echo $inputString;?></p>
<?php endif;?>