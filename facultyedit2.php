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

$id = $_GET['txtid5'];
$add=$_POST['Address'];
$contact=$_POST['Contact'];

//echo $add;
//echo $contact;



//echo $id;

$sql= "UPDATE faculty SET faculty.facultyAddress='$add',faculty.facultyContactNo='$contact' WHERE faculty.facultyID='$id'";

$con->query($sql);

if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}

?>
<br><center><a href="index.html">Logout</a></center>
<?php




$con->close();
?> 



