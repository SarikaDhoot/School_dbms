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
    <body><br><br><br>
        

        
        
    <p><?php
$con = mysqli_connect("localhost","root","","dbms project");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
    //echo "Connected this!!";
}
            
$id = $_GET['txtid2'];
//echo $id;
        
$sql2="select sName from student where s_ID='$id'";
$c=$con->query($sql2);
$rec2=mysqli_fetch_array($c);  
        
$sql5="select subject.subjectID,subjectName, grade from subject, student_takes, student where student.s_ID=student_takes.s_ID AND subject.subjectID=student_takes.subjectID AND student.s_ID='$id' order by subjectID";
$d=$con->query($sql5);
        
        
        ?>
  

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <ul class="nav navbar-nav">
          <li><a href="studenthome.php">Home</a></li>
          <li><a href="Course.php">Subjects</a></li>
          <li  class="active"><a href="#">Grades</a></li>
        </ul>    
      </div>
    </nav>

    <div class="content container">
      <div class="row">
        <section class="col-xs-12">
            <br><br><br>

    <h2><?php echo $rec2['sName'] ?></h2>
            <p></p>

    <h1>Grade Report</h1>

    
    <p></p>

           <table class="table table-striped">
            <thead>
              <tr><th>Subject ID</th><th>Subject Name</th><th>Grade Obtained</th>
              </tr>
            </thead>
            <tbody>
                <?php
                
                while ($row=mysqli_fetch_row($d))
                { 
                ?>  
                    <tr>
                <th scope="row"><?php  printf ("%s\n",$row[0]); ?></th>
               <td><?php  
                    printf ("%s\n",$row[1]); ?>
                    
                        </td>
                <td><?php  
                    printf ("%s\n",$row[2]); ?>
                    
                        </td>        
                        <?php
                }



        
  
?>    

        
              
            </tbody>
          </table>

        </section>
      </div><!-- row -->   
    </div><!-- content container -->


    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    </body>
    </html>