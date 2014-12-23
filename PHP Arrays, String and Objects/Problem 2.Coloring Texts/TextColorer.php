<?php
require_once "TextColorer.html";
if(isset($_POST['submit'])):
    $enter = htmlentities($_POST['enter']);
    $chars = [];
    preg_match_all('/[^\s]/', $enter, $chars);
foreach($chars[0] as $char):
    if(ord($char) %2 != 0):?>
    <span class="blue"><?php echo $char;?> </span>
    <?php else:?>
    <span class="red"><?php echo $char;?> </span>
    <?php endif;
endforeach;
endif;?>