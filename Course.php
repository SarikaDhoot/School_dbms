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
        
       <br><br><br> 
        <p><?php
$con = mysqli_connect("localhost","root","","dbms project");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
   // echo "Connected!!";
}
            
$id = $_GET['txtid1'];
            
$sql="select subjectID from student_takes where s_ID='$id'";
$a=$con->query($sql);
$row_cnt =mysqli_num_rows($a);
$sql1="select subjectName, subject.subjectID from subject,student_takes where subject.subjectID=student_takes.subjectID AND student_takes.s_ID='$id' order by subjectName";
$b=$con->query($sql1);
$sql2="select sName from student where s_ID='$id'";
$c=$con->query($sql2);
$rec2=mysqli_fetch_array($c);
$sql3="select courseName from student_takes,course where student_takes.courseID=course.courseID AND student_takes.s_ID='$id'";
$d=$con->query($sql3);
$rec3=mysqli_fetch_array($d);


//$rec2=mysqli_fetch_array($a);
        //   echo $rec2['subjectID'];
            
            ?>
            
            </p>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <ul class="nav navbar-nav">
          <li><a href="studenthome.html">Home</a></li>
          <li class="active"><a href="#">Subjects</a></li>
          <li><a href="Grades.html">Grades</a></li>
        </ul>    
      </div>
    </nav>

    <div class="content container">
      <div class="row">
        <section class="col-xs-12">

    <h2><?php echo $rec2['sName']; ?></h2>
            <p></p>

    <h1>Course Name: <?php echo $rec3['courseName']; ?></h1>
	
	

    <h2>Subject List</h2>
    <p></p>
            
                <table class="table table-striped">
            <thead>
              <tr><th scope="row">Subject Name</th><th>Subject ID</th>
              </tr>
            </thead>
            <tbody>
                <?php
                
                while ($row=mysqli_fetch_row($b))
                { //$row1=mysqli_fetch_row($b)
                ?>  
                    <tr>
                <th scope="row"><?php  printf ("%s\n",$row[0]); ?></th>
               <td><?php  
                    printf ("%s\n",$row[1]); ?>
                    
                        </td><?php
                }




        
  
?>    

        
              
            </tbody>
          </table>
		  <br>
		  <br>
		  <h3>Total Number of subjects taken by student: <?php echo $row_cnt; ?></h3>
        </section>
      </div><!-- row -->   
    </div><!-- content container -->
        
        




    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    </body>
    </html>