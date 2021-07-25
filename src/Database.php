<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
    </style>
  </head>

  <body>

    <!-- <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav> -->

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">課程資料庫應用系統</h1>
          <p>資工四B 405416529 薛仲烜</p>
          <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p> -->
          <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->


          <!-- <table>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Description</th>
            </tr>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Description</th>
            </tr><tr>
              <th>No</th>
              <th>Name</th>
              <th>Description</th>
            </tr><tr>
              <th>No</th>
              <th>Name</th>
              <th>Description</th>
            </tr>
          </table> -->

          <?php 
           // include("Student.php");
          ?>

          <div id="table-grid">
            
          </div>

        </div>
      </div>
      

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">

          <div class="col-md-4">
            <h2>Student</h2>
            <p>Id</p>
            <p>Name</p>
            <p>gender</p>
            <p>bDate</p>
            <p>email</p>
            <p><a class="btn btn-secondary" onclick="loadPage('Student.php')" role="button">View details &raquo;</a></p>
          </div>
          
          <div class="col-md-4">
            <h2>Takes</h2>
            <p>Id</p>
            <p>No</p>
            <p>Score</p>

            <p><a class="btn btn-secondary" onclick="loadPage('Takes.php')" role="button">View details &raquo;</a></p>
          </div>
          
          <div class="col-md-4">
            <h2>Course</h2>
            <p>No</p>
            <p>Name</p>
            <p>Description</p>
            <a class="btn btn-secondary" onclick="loadPage('Course.php')" role="button">View details &raquo;</a></p>
          </div>

          <div class="col-md-4">
            <h2>Evaluate</h2>
            <p>StudentId</p>
            <p>ItemName</p>
            <p>CourseNo</p>
            <p>Score</p>
            <p><a class="btn btn-secondary" onclick="loadPage('Evaluate.php')" role="button">View details &raquo;</a></p>
          </div>
          
          <div class="col-md-4">
            <h2>Item</h2>
            <p>No</p>
            <p>Name</p>
            <p>DueDate</p>  
            <p><a class="btn btn-secondary" onclick="loadPage('Item.php')" role="button">View details &raquo;</a></p>
          </div>
          
          <div class="col-md-4">
            <h2>Teacher</h2>
            <p>No</p>
            <p>Name</p>
            <p>Title</p>  
            <a class="btn btn-secondary" onclick="loadPage('Teacher.php')" role="button">View details &raquo;</a></p>
          </div>
          
          
          <div class="col-md-4">
            <h2>Teaches</h2>
            <p>TeacherNo</p>
            <p>CourseNo</p>
            
            <p><a class="btn btn-secondary" onclick="loadPage('Teaches.php')" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>TeacherDepartment</h2>
            <p>TeacherNo</p>
            <p>Department</p>
            <p><a class="btn btn-secondary" onclick="loadPage('TeacherDepartment.php')" role="button">View details &raquo;</a></p>
          </div>
          
          
        
        </div>
        
        <hr>


      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p>&copy; Company 2017-2018</p>
    </footer>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <script>
      function loadPage(filename) {
        $('#table-grid').load(filename);
      }
    </script>
  </body>
</html>
