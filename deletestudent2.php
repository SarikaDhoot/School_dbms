<?php
$host="localhost";
$user="root";
$password="";
$database="dbms project";


mysql_connect($host,$user,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM student";
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
                 <h2>Remove Student Details</h2>
            
            
            
                

            <table class="table table-striped">
            <thead>
              <tr>
                  <td> Student ID </td>
<td> Name </td>
<td> Address </td>
<td> Student Contact No</td>
<td> Division </td>
<td> Parent Name </td>
<td> Parent Contact No </td>
<td> Date of Birth</td>
<td> Email ID </td>
                </tr>
                </thead>
                  
            
            

                   <?php
            
$i=0;
while ($i < $num) {


$RollNo=mysql_result($result,$i,"s_ID");
$Name=mysql_result($result,$i,"sName");
$Marks=mysql_result($result,$i,"sAddress");
$Age=mysql_result($result,$i,"sContactNo");
$Address=mysql_result($result,$i,"sDivision");
$Contact=mysql_result($result,$i,"sParentName");
$Contact1=mysql_result($result,$i,"pContactNo");
$Contact2=mysql_result($result,$i,"sDateOfBirth");
$Contact4=mysql_result($result,$i,"sEmailID");
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
            