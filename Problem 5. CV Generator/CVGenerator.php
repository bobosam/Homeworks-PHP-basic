<?php

    require('index.html');
    error_reporting(0);
if(isset($_POST['sendButton'])) {

    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $birthDate = htmlspecialchars($_POST['birth']);
    $nationality = htmlspecialchars($_POST['nationality']);
    $company = htmlspecialchars($_POST['company']);
    $workedFrom = htmlspecialchars($_POST['from']);
    $workedTo = htmlspecialchars($_POST['to']);
    $programmingLanguage = htmlspecialchars($_POST['progLang']);
    $levelProgramming = htmlspecialchars($_POST['level']);
    $speakingLanguages = htmlspecialchars($_POST['speakLang']);
    $comprehension = htmlspecialchars($_POST['comprehension']);
    $reading = htmlspecialchars($_POST['reading']);
    $writing = htmlspecialchars($_POST['writing']);
    $bLicense = ''; $cLicense = ''; $aLicense = '';
    if(isset($_POST['B'])) {
        $bLicense = 'B';
    }
    if(isset($_POST['A'])) {
        $aLicense = 'A';
    }
    if(isset($_POST['C'])) {
        $cLicense = 'C';
    }
    if(!preg_match('/[^A-Za-z]/', $firstName) && !preg_match('/[^A-Za-z]/', $lastName)
        && !preg_match('/[^A-Za-z0-9 ]/', $company) && strlen($firstName) <= 20 && strlen($firstName) >= 2 &&
        strlen($lastName) <= 20 && strlen($lastName) >= 2 &&
        strlen($company) <= 20 && strlen($company) >= 2 &&
        !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $birthDate) &&
        !preg_match('/[^0-9\+\-\s]/', $phone)
    ) {
        $personalInfoTable = '<table><thead><tr><th colspan="2">Personal Information</th></tr></thead><tbody>' .
            '<tr><td>First Name</td><td>' . $firstName . '</td></tr><td>Last Name</td><td>' . $lastName . '</td></tr>' .
            '<tr><td>Email</td><td>' . $email . '</td></tr>' .
            '<tr><td>Phone</td><td>' . $phone . '</td></tr>' .
            '<tr><td>Gender</td><td>' . $gender . '</td></tr>' .
            '<tr><td>Birth Date</td><td>' . $birthDate . '</td></tr>' .
            '<tr><td>Nationality</td><td>' . $nationality . '</td></tr></tbody></table></br>';
        $lastWorkTable = '<table><thead><tr><th colspan="2">Last Work Position</th></tr></thead><tbody>' .
            '<tr><td>Company Name</td><td>' . $company . '</td></tr>' .
            '<tr><td>From</td><td>' . $workedFrom . '</td></tr>' .
            '<tr><td>To</td><td>' . $workedTo . '</td></tr></tbody></table></br>';
        $computerSkillsTable = '<table><thead><tr><th colspan="2">Computer Skills</th></tr></thead><tbody>' .
            '<tr><td>Programming Languages</td><td><table><thead><tr><th>Language</th><th>Skill Level</th></tr></thead>' .
            '<tbody>';
        for($i = 0; $i < count($levelProgramming) ;$i++) {
            $computerSkillsTable .= '<tr>';
            $computerSkillsTable .= '<td>' . $programmingLanguage[$i] . '</td>';
            $computerSkillsTable .= '<td>' . $levelProgramming[$i] . '</td>';
            $computerSkillsTable .= '</tr>';
        }
        $computerSkillsTable .= '</tbody></table></tr></tbody></table></br>';
        $otherSkills = '<table><thead><tr><th colspan="2">Other Skills</th></tr></thead><tbody>' .
            '<tr><td>Languages</td><td><table><thead><th>Language</th><th>Comprehension</th>' .
            '<th>Reading</th><th>Writing</th></tr>';
        for($i = 0; $i < count($comprehension) ;$i++) {
            $otherSkills .= '<tr>';
            $otherSkills .= '<td>' . $speakingLanguages[$i] . '</td>';
            $otherSkills .= '<td>' . $comprehension[$i] . '</td>';
            $otherSkills .= '<td>' . $reading[$i] . '</td>';
            $otherSkills .= '<td>' . $writing[$i] . '</td>';
        }
        $otherSkills .= '</tbody></table></tr><tr><td>Driver`s License</td><td>' . $bLicense . " ". $aLicense. " " . $cLicense .'</td></tr>';
        $otherSkills .= '</tbody></table></br>';
    }
    if(isset($personalInfoTable) && isset($lastWorkTable) && isset($computerSkillsTable) && $otherSkills) {
        echo $personalInfoTable;
        echo $lastWorkTable;
        echo $computerSkillsTable;
        echo $otherSkills;
    }
    else {
        echo "Please enter a valid information to generate your CV";
    }
}

?>

