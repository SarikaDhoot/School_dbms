<?php
$host="localhost";
$user="root";
$password="";
$database="dbms project";

mysql_connect($host,$user,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="INSERT INTO faculty VALUES('$_POST[facultyID]','$_POST[facultyName]','$_POST[facultyAddress]',$_POST[facultyContactNo],'$_POST[facultyDesignation]',$_POST[facultySalary],'$_POST[facultyQualification]','$_POST[managerID]','$_POST[facultyEmailID]')";


mysql_query($query);



mysql_close();
 header("Location:addfaculty2.php");
exit();

echo "<b><center>Database Output</center></b><br><br>";



?>


