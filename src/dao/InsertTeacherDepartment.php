<?php
    header('Content-Type: application/json');

    $sql_connect = mysqli_connect('127.0.0.1:3307',"root","","school"); 
    mysqli_query($sql_connect,"SET CHARACTER SET utf8");

    $sql_insert = "
    INSERT INTO teacherdepartment(tNo,department) VALUES (
      " . $_POST['teacherNo'] .",
      \"" . $_POST['Department'] . "\"
    )";
    
    $result = mysqli_query($sql_connect, $sql_insert);
    echo $result ;
    echo $sql_insert;

    // header('Location: '. '../Database.php');
?>