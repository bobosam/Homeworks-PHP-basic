<?php
$_SESSION['counter'] = 0;
require "index.html";
session_start();
$enter = $_GET['enter'];
$enter = ltrim($enter,"<");
$enter = rtrim($enter,">");
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}
$htmlTags = array('html', 'head', 'title', 'base', 'link', 'meta', 'style',
    'script', 'noscript', 'template', 'body', 'section', 'nav',
    'article', 'aside', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6',
    'header', 'footer', 'address', 'main', 'p', 'hr', 'pre',
    'blockquote', 'ol', 'ul', 'li', 'dl', 'dt', 'figure',
    'figcaption', 'div', 'a', 'em', 'strong', 'small', 's',
    'cite', 'q', 'dfn', 'abbr', 'data', 'time', 'code', 'var',
    'samp', 'kbd', 'sub', 'sup', 'i', 'b', 'u', 'mark', 'ruby',
    'rt', 'rp', 'bdi', 'bdo', 'span', 'br', 'wbr', 'ins', 'del',
    'img', 'iframe', 'embed', 'object', 'param', 'video', 'audio',
    'source', 'track', 'canvas', 'map', 'area', 'svg', 'math',
    'table', 'caption', 'colgroup', 'col', 'tbody', 'thead',
    'tfoot', 'tr', 'td', 'th', 'form', 'fieldset', 'legend',
    'label', 'input', 'button', 'select', 'datalist', 'optgroup',
    'option', 'textarea', 'keygen', 'output', 'progress',
    'meter', 'details', 'summary', 'menuitem', 'menu');

if(isset($_GET['enter'])):
    if(in_array($enter,$htmlTags)):
        $_SESSION['counter']++;?>
        <h1>Valid HTML tag!</h1>
        <h1>Score:<?= $_SESSION['counter'];?></h1>
        <?php else :?>
        <h1>Invalid HTML tag!</h1>
        <h1>Score:<?= $_SESSION['counter'];?></h1>
    <?php endif;?>
<?php endif;?>