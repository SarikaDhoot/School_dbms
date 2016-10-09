<?php
$host="localhost";
$user="root";
$password="";
$database="dbms project";

mysql_connect($host,$user,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="INSERT INTO student VALUES('$_POST[s_ID]','$_POST[sName]','$_POST[sAddress]',$_POST[sContactNo],'$_POST[sDivision]','$_POST[sParentName]',$_POST[pContactNo],'$_POST[sDateOfBirth]','$_POST[sEmailID]')";

/*query="INSERT INTO student VALUES('2331','fdsfsf','reqwddss',$_POST[sContactNo],],'$_POST[sDivision]','$_POST[sParentName]',$_POST[pContactNo],'$_POST[sDateOfBirth]','$_POST[sEmailID]')";*/

mysql_query($query);



mysql_close();
 header("Location:addstudent2.php");
exit();

echo "<b><center>Database Output</center></b><br><br>";



?>

