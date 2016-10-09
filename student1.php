<?php
$con = mysqli_connect("localhost","root","","dbms project");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
    echo "Connected!!";
}


$uname=$_POST['username']; 



$sql="select * from student where sName='$uname'";
$a=$con->query($sql);
$rec2=mysqli_fetch_array($a);

    echo $rec2['s_ID']; 
    echo $rec2['sName'];
    echo $rec2['sAddress'];
    echo $rec2['sContactNo'];
    echo $rec2['sDivision'];
echo $rec2['sDateOfBirth'];
echo $rec2['sParentName'];
echo $rec2['pContactNo'];
echo $rec2['sEmailID'];
    

?>