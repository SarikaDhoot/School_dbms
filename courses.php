<?php
$host="localhost";
$user="root";
$password="";
$database="dbms project";


mysql_connect($host,$user,$password);
@mysql_select_db($database) or die( "Unable to select database");


$query="select subjectName, courseName from subject  INNER JOIN student_takes  ON subject.subjectID=student_takes.subjectID INNER JOIN course ON student_takes.courseID=course.courseID order by courseName";

//$query="SELECT * FROM course";
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
                 <h2>List of courses and subjects under them</h2>
            
            
            <table class="table table-striped">
            <thead>
              <tr>
            <td> Subject Name</td>
<td> Course Name </td>
             </tr>
                </thead>
                  
            
            

                   <?php
            
$i=0;
while ($i < $num) {
            
            
$RollNo=mysql_result($result,$i,"subjectName");
$Name=mysql_result($result,$i,"courseName");
//$Marks=mysql_result($result,$i,"courseDuration");
 ?> 
                
                
                 <tr>
                     
                     
                     
                     
                     <td><?php echo "$RollNo"; ?></td>
                    <td><?php echo "$Name"; ?></td>
        
                
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
    </body>
    </html>
            