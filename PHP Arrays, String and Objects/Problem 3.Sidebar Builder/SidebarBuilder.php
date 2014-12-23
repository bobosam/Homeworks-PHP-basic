<?php
require_once "SidebarBuilder.html";
if(isset($_GET['submit'])):
$categories = htmlentities($_GET['categories']);
$tags = htmlentities($_GET['tags']);
$months = htmlentities($_GET['months']);
$categoriesArray = preg_split('/, /', $categories);
$tagsArray = preg_split('/, /', $tags);
$monthsArray = preg_split('/, /', $months);
?>
    <aside>
        <?php buildsSidebars('Categories',$categoriesArray);
            buildsSidebars('Tags', $tagsArray);
            buildsSidebars('Months', $monthsArray);?>
    </aside>

<?php endif;?>

<?php function buildsSidebars($name,$array){?>
    <nav>
        <h1><?php echo $name;?></h1>
        <hr>
        <ul>
        <?php foreach($array as $element):?>
        <li><a href=""><?php echo $element;?></a></li>
        <?php endforeach;?>
        </ul>
    </nav>
<?php };?>