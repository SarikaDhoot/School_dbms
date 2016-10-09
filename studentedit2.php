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

$id = $_GET['txtid'];
$add=$_POST['Address'];
$contact=$_POST['Contact'];
$pcontact=$_POST['parentContact'];
//echo $add;
//echo $contact;
//echo $pcontact;


//echo $id;

$sql= "UPDATE student SET student.sAddress='$add',student.sContactNo='$contact',student.pContactNo='$pcontact' WHERE s_ID='$id'";

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



