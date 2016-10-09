<?php
$con = mysqli_connect("localhost","root","","dbms project");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <title>Bootstrap</title>
</head>
<body> 
    
    
<div class="container">
  <div class="row">
    <section class="col-xs-12">
    

    <form name="f1" method="post" action="addstudent.php" id="f1">
     <input class="form-control" type="submit" name="addstudent" value="Add Student" style="font-size:18px; " />
                    </form> 

    <form name="f2" method="post" action="addfaculty.php" id="f2">
     <input class="form-control" type="submit" name="addfaculty" value="Add faculty" style="font-size:18px; " />
                    </form> 

    <form name="f2" method="post" action="deletestudent.php" id="f2">
     <input class="form-control" type="submit" name="removestudent" value="Remove Student" style="font-size:18px; " />
                    </form> 



    <form name="f2" method="post" action="deletefaculty.php" id="f2">
     <input class="form-control" type="submit" name="removefaculty" value="Remove Faculty" style="font-size:18px; " />
                    </form> 

<form name="f2" method="post" action="courses.php" id="f2">
     <input class="form-control" type="submit" name="removefaculty" value="Courses" style="font-size:18px; " />
                    </form> 
      </section>

        
          </div><!-- row -->   
</div><!-- content container -->


<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<form method="post" action="index.html">
  <button type="button"
                    class="btn btn-default" onclick="submit()" >Log Out</button>

</body>
</html>

