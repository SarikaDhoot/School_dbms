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


if(isset($_POST['login']))
{
$uname=$_POST['username']; 
$pass=$_POST['password'];

    
$sql="select userType from login where username='$uname'";
$a=$con->query($sql);
$rec=mysqli_fetch_array($a);
    echo $rec['userType'];  


$f="faculty";
$s="student";
$ad="admin";

if($rec['userType'] == $s)
{
    header("Location: student1.php");
}
if($rec['userType'] == $f)
{
    //echo "bullshit";
    header("Location: faculty1.php");
}
if($rec['userType'] == $ad)
{
    //echo "bullshit";
    header("Location: admin1.php");
}

    
}

?> 