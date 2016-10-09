<!DOCTYPE html>
<?php
$con = mysqli_connect("localhost","root","","dbms project");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
    //echo "Connected!!";
}

$id = $_GET['txtid4'];

//echo $id;


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
<form name="facultyeditform" method="post" action="facultyedit2.php? txtid5=<?php echo $id;?>" id="facultyeditform">
<div class="container">
  <div class="row">
    <section class="col-xs-12">
            <h2>Update Details</h2>

  <label for="inputAddress">Address</label>
  <input class="form-control" type="text" id="inputAddress" name="Address"
    placeholder="Address">
    
  <label for="inputContact">Contact</label>
  <input class="form-control" type="text" id="inputContact" name="Contact"
    placeholder="Contact">


    <br>
    
 <button type="button" class="btn btn-default" onclick="submit()" >Update</button>
</form>


    </section>
  </div><!-- row -->   
</div><!-- content container -->


<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>