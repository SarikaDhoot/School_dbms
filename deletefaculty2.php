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


?>    


<!DOCTYPE html>
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
            
                 <div class="content container">
      <div class="row">
        <section class="col-xs-12">
               <h2>Remove Faculty Details</h2>
            
            

            <table class="table table-striped">
            <thead>
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
                     </tr>
            </thead>
                
                   <?php
            
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

  
            ?>  
                <tr>
                <td><?php echo "$RollNo"; ?></td>
                    <td><?php echo "$Name"; ?></td>
                    <td><?php echo "$Marks"; ?></td>
                    <td><?php echo "$Age"; ?></td>
                    <td><?php echo "$Address"; ?></td>
                    <td><?php echo "$Contact"; ?></td>
                    <td><?php echo "$Contact1"; ?></td>
                    <td><?php echo "$Contact2"; ?></td>
                    <td><?php echo "$Contact4"; ?></td>
            
                
                
                </tr>
                <?php
                $i++;
}
                 ?>  
            </table>
                       
        </section>
      </div><!-- row -->   
    </div><!-- content container -->
                
                

   <script src="js/jquery-2.1.4.min.js"></script> 
    <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script> 
<form method="post" action="admin1.php">
  <button type="button"
                    class="btn btn-default" onclick="submit()" >Go to Admin Home</button>

    </body>
    </html>
            