<?php
$host="localhost";
$user="root";
$password="";
$database="dbms project";

mysql_connect($host,$user,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="DELETE FROM student WHERE s_ID='$_POST[s_ID]'";

/*query="INSERT INTO student VALUES('2331','fdsfsf','reqwddss',$_POST[sContactNo],],'$_POST[sDivision]','$_POST[sParentName]',$_POST[pContactNo],'$_POST[sDateOfBirth]','$_POST[courseID]','$_POST[sEmailID]')";*/

mysql_query($query);



mysql_close();
 header("Location:deletestudent2.php");
exit();

echo "<b><center>Database Output</center></b><br><br>";



?>


