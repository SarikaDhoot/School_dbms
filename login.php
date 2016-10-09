<?php  
//$con=mysql_connect("localhost","root","");
//mysql_select_db("ssrv",$con);  
$con=mysqli_connect('localhost', 'root', '', 'smith');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

if(isset($_POST['login']))
{
$uname=$_POST['username']; 
$pass=$_POST['password'];

$sql="select sContactNo from student where sName = '$uname'";
$a=$con->query($sql);
$rec=mysqli_fetch_array($a);
    echo $rec['sContactNo'];

if ($con->query($sql) === TRUE) {
    echo "login successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<br />

<script src="ssrv.js"></script>
<link href="ssrv.css" rel="stylesheet">
</head>

<body>
<h1> Bhai you are logged in.</h1>
    </body>
    </html>