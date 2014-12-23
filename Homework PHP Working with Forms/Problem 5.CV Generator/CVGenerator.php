<?php
require "index.html";
if(isset($_GET['firstName'], $_GET['lastName'], $_GET['email'], $_GET['phone'], $_GET['sex'],
            $_GET['birth'], $_GET['nationality'], $_GET['company'], $_GET['from'],
            $_GET['to'], $_GET['pcLanguage'], $_GET['language'], $_GET['spoken'],
            $_GET['reading'], $_GET['writing'], $_GET['drive'])):
    $firstName = htmlentities($_GET['firstName']);
    $lastName = htmlentities($_GET['lastName']);
    $email = htmlentities($_GET['email']);
    $phone = htmlentities($_GET['phone']);
    $sex = htmlentities($_GET['sex']);
    $birthDay = htmlentities($_GET['birth']);
    $nationality = htmlentities($_GET['nationality']);
    $company = htmlentities($_GET['company']);
    $fromDate = htmlentities($_GET['from']);
    $toDate = htmlentities($_GET['to']);
    $pcLanguage = $_GET['pcLanguage'];
    $progrLevel = $_GET['progrLanguage'];
    $spoken = $_GET['spoken'];
    $language = $_GET['language'];
    $reading = $_GET['reading'];
    $writing = $_GET['writing'];
    $drive = $_GET['drive'];
?>
<h1>CV</h1>
<table>
    <tr>
        <td class="header" colspan="2">Personal Information</td>
    </tr>
    <tr>
        <td>First Name</td>
        <td><?= $firstName;?></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><?= $lastName;?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?= $email;?></td>
    </tr>
    <tr>
        <td>Phone Number</td>
        <td><?= $phone;?></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><?= $sex;?></td>
    </tr>
    <tr>
        <td>Birth Date</td>
        <td><?= $birthDay;?></td>
    </tr>
    <tr>
        <td>Nationality</td>
        <td><?= $nationality;?></td>
    </tr>
</table>
<table>
    <tr>
        <td class="header" colspan="2">Last Work Position</td>
    </tr>
    <tr>
        <td>Company Name</td>
        <td><?= $company;?></td>
    </tr>
    <tr>
        <td>From</td>
        <td><?= $fromDate;?></td>
    </tr>
    <tr>
        <td>To</td>
        <td><?= $toDate;?></td>
    </tr>
</table>
<table>
    <tr>
        <td class="header" colspan="2">Computer Skills</td>
    </tr>
    <tr>
        <td>Programming Languages</td>
        <td>
            <table>
                <tr class="header">
                    <td>Language</td>
                    <td>Skill Level</td>
                </tr>
                <?php for($i = 0; $i < sizeof($pcLanguage); $i++):?>
                <tr>
                    <td><?= $pcLanguage[$i];?></td>
                    <td><?= $progrLevel[$i];?></td>
                </tr>
                <?php endfor;?>
            </table>
        </td>
    </tr>
</table>
<table>
    <tr>
        <td  class="header" colspan="2">Other Skills</td>
    </tr>
    <tr>
        <td>Languages</td>
        <td>
            <table>
                <tr class="header">
                    <td>Language</td>
                    <td>Comprehension</td>
                    <td>Reading</td>
                    <td>Writing</td>
                </tr>
                <?php for($i = 0; $i < sizeof($language); $i++):?>
                <tr>
                    <td><?= $language[$i];?></td>
                    <td><?= $spoken[$i];?></td>
                    <td><?= $reading[$i];?></td>
                    <td><?php echo $writing[$i];?></td>
                </tr>
                <?php endfor;?>
            </table>
        </td>
    </tr>
    <tr>
        <td>Driver's License</td>
        <td><?= implode(',',$drive);?></td>
    </tr>
</table>
<?php endif;?>