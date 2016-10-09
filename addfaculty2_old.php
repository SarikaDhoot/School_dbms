<?php
$host="localhost";
$user="root";
$password="";
$database="dbms project";


mysql_connect($host,$user,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM faculty";
$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();

echo "<b><center>Database Output</center></b><br><br>";
echo "
<table border=1 align=center>
<tr>
<td> Faculty ID </td>
<td> Name </td>
<td> Address </td>
<td> Contact No</td>
<td> Designation </td>
<td> Salary</td>
<td> Qualification</td>
<td> Manager ID</td>
<td> Email ID </td>
</tr>";

$i=0;
while ($i < $num) {

$RollNo=mysql_result($result,$i,"facultyID");
$Name=mysql_result($result,$i,"facultyName");
$Marks=mysql_result($result,$i,"facultyAddress");
$Age=mysql_result($result,$i,"facultyContactNo");
$Address=mysql_result($result,$i,"facultyDesignation");
$Contact=mysql_result($result,$i,"facultySalary");
$Contact1=mysql_result($result,$i,"facultyQualification");
$Contact2=mysql_result($result,$i,"managerID");
$Contact4=mysql_result($result,$i,"facultyEmailID");

echo "<tr>";
echo "<td>". "$RollNo"." </td>";
echo "<td>". "$Name"." </td>";
echo "<td>". "$Marks"." </td>";
echo "<td>". "$Age"." </td>";
echo "<td>"."$Address"." </td>";
echo "<td>"."$Contact"." </td>";
echo "<td>"."$Contact1"." </td>";
echo "<td>"."$Contact2"." </td>";
echo "<td>"."$Contact4"." </td>";

echo "</tr>" ;

//echo "<br>RollNo: $RollNo<br>Name: $Name<br>Marks: $Marks<br> <br>Age: $Age <br>Address: $Address <br>Contact: $Contact";

$i++;
}
echo "</table>";
//echo "<a href=\"conf.html\" target=\"_blank\"> BACK</a>";
?>

