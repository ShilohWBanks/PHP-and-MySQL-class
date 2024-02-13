<?php
    $dsn = 'mysql:host=localhost;dbname=school';
    $username = 'mgs_user';
    $password = 'pa55word';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo $error_message;
        exit();
    }
    $student_firstname = 'John';
    $querystudents = 'SELECT * FROM students WHERE student_firstname = :student_firstname';
                  
$statement1 = $db->prepare($querystudents);
$statement1->bindValue(':student_firstname', $student_firstname);
$statement1->execute();
$student = $statement1->fetch();
$statement1->closeCursor();
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo $student['student_firstname'].' '. $student['student_lastname'].' '. $student['GPA'].' '. $student['major']. ' ' . $student['address'].' '.$student['city'].' '.$student['state'].' '.$student['zip'].'<br>';
        ?>
    </body>
</html>


