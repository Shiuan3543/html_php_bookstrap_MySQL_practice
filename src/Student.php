          <h1 class="display-3">Student</h1>
          <form class="form-inline my-2 my-lg-0" method="post" action="dao/InsertStudent.php">
            <input class="form-control mr-sm-2" type="text" name="Id" placeholder="Id" aria-label="new">
            <input class="form-control mr-sm-2" type="text" name="Name" placeholder="Name" aria-label="new">
            <input class="form-control mr-sm-2" type="text" name="gender" placeholder="gender" aria-label="new">
            <input class="form-control mr-sm-2" type="text" name="BDate" placeholder="BDate" aria-label="new">
            <input class="form-control mr-sm-2" type="text" name="Email" placeholder="Email" aria-label="new">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >new</button>
          </form>
        <table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Gender</th>
    <th>BDate</th>
    <th>Email</th>
  </tr>
  <?php
    $sql_connect = mysqli_connect('127.0.0.1:3307',"root","","school"); 
    mysqli_query($sql_connect,"SET CHARACTER SET utf8");
    $sql_select = "
    SELECT 
      sID,
      sName,
      Gender,
      BDate,
      Email
    FROM Student";
    $result = mysqli_query($sql_connect,$sql_select);
    
    if(!$result){echo("error");
    }else{
        while($row = mysqli_fetch_array($result)){
        echo"
            <tr>
                <td>$row[0]</td>
                <td>$row[1]</td>
                <td>$row[2]</td>
                <td>$row[3]</td>
                <td>$row[4]</td>
            </tr>        
            ";}
    } 
?>
</table>

