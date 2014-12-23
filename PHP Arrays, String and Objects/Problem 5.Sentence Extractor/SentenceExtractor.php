<?php
require_once "SentenceExtractor.html";
if(isset($_GET['submit'])):
    $inputText = htmlentities($_GET['text']);
    $word = htmlentities(($_GET['word']));
    $textArray = preg_split('/[.!?]/',$inputText);
    foreach($textArray as $text):
        $wordArray = preg_split('/\W/i', $text);
        if(in_array($word, $wordArray)):
?>
        <p><?php echo $text;?></p>
<?php endif;
endforeach;
endif;?>