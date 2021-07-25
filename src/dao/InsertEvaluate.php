<?php
    header('Content-Type: application/json');

    $sql_connect = mysqli_connect('127.0.0.1:3307',"root","","school"); 
    mysqli_query($sql_connect,"SET CHARACTER SET utf8");

    $sql_insert = "
    INSERT INTO Evaluated(sId, cNo, iName, score) VALUES (
      " . $_POST['StudentId'] .",
      " . $_POST['CourseNo'] . ",
      \"" . $_POST['ItemName'] . "\",
      " . $_POST['Score'] . "
    )";


    $result = mysqli_query($sql_connect, $sql_insert);

    header('Location: '. '../Database.php');
?>