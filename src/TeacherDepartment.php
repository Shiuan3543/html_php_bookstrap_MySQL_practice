<h1 class="display-3">TeacherDepartment</h1>
          <form class="form-inline my-2 my-lg-0" method="post" action="dao/InsertTeacherDepartment.php">
          <input class="form-control mr-sm-2" name="teacherNo" type="text" placeholder="TeacherNo" aria-label="new">
          <input class="form-control mr-sm-2" name="Department" type="text" placeholder="Department" aria-label="new">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >new</button>
        </form>
        <table>
  <tr>
    <th>TeacherNo</th>
    <th>Department</th>
  </tr>
  <?php
    $sql_connect = mysqli_connect('127.0.0.1:3307',"root","","school"); 
    mysqli_query($sql_connect,"SET CHARACTER SET utf8");
    $sql_select = "SELECT 
      tNo,
      department
    FROM teacherdepartment";
    $result = mysqli_query($sql_connect,$sql_select);
    
    if(!$result){echo("error");
    }else{
        while($row = mysqli_fetch_array($result)){
        echo"
            <tr>
                <td>$row[0]</td>
                <td>$row[1]</td>
            </tr>        
            ";}
    } 
?>
</table>