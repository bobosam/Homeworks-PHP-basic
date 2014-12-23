<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>get-form-data</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<form method="get">
    <input type="text" name="name" placeholder="Name.."><br/>
    <input type="number" name="age" placeholder="Age.."><br/>
    <input type="radio" name="gender" value="male" id="male">
    <label for="male">Male</label><br/>
    <input type="radio" name="gender" value="female" id="female">
    <label for="female">Female</label><br/>
    <input type="submit">
</form>

<?php
if (isset($_GET['name'], $_GET['age'], $_GET['gender'])) :
    $name =htmlentities($_GET['name']);
    $age =htmlentities( $_GET['age']);
    $gender = $_GET['gender'];
?>
<p>My name is <?php echo $name;?>. I am <?php echo $age;?> years old. I am <?php echo $gender;?>.</p>
<?php endif;?>

</body>
</html>
