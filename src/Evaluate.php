          <h1 class="display-3">Evaluate</h1>
          <form class="form-inline my-2 my-lg-0" method="post" action="dao/InsertEvaluate.php">
          <input class="form-control mr-sm-2" type="text"  name="StudentId" placeholder="StudentId" aria-label="new">
          <input class="form-control mr-sm-2" type="text"  name="ItemName" placeholder="ItemName" aria-label="new">
          <input class="form-control mr-sm-2" type="text"  name="CourseNo" placeholder="CourseNo" aria-label="new">
          <input class="form-control mr-sm-2" type="text"  name="Score" placeholder="Score" aria-label="new">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >new</button>
        </form>
        <table>
  <tr>
    <th>StudentId</th>
    <th>ItemName</th>
    <th>CourseNo</th>
    <th>Score</th>
  </tr>
  <?php
    $sql_connect = mysqli_connect('127.0.0.1:3307',"root","","school"); 
    mysqli_query($sql_connect,"SET CHARACTER SET utf8");
    $sql_select = "
    SELECT 
      sId,
      iName,
      cNo,
      score
    FROM Evaluated";
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
            </tr>        
            ";}
    } 
?>
</table>

