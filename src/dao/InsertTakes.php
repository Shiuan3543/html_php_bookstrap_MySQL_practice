<?php
    header('Content-Type: application/json');

    $sql_connect = mysqli_connect('127.0.0.1:3307',"root","","school"); 
    mysqli_query($sql_connect,"SET CHARACTER SET utf8");

    $sql_insert = "
    INSERT INTO Takes(sId,cNo,finalScore) VALUES (
      " . $_POST['Id'] .",
      " . $_POST['No']  . ",
      " . $_POST['finalScore'] . "

    )";
    echo $sql_insert;
    $result = mysqli_query($sql_connect, $sql_insert);

    header('Location: '. '../Database.php');
?>
