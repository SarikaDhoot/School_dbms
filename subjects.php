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
    <body><br><br><br><br>
        
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
            
$id = $_GET['txtid3'];
//$sql= "select subjectName, subject.subjectID from subject //where subject.subjectID= (select teaches.subjectID from //teaches where facultyID='$id') ";            

$sql="select subjectName,subject.subjectID from subject,teaches where subject.subjectID=teaches.subjectID AND facultyID='$id' order by subjectName";
$ar=$con->query($sql);
$row_cnt =mysqli_num_rows($ar);
//$rec=mysqli_fetch_array($ar);
//echo $rec['subjectName'];
$sql1="select subjectID from teaches where facultyID='$id'";
$br=$con->query($sql1);
$sql3="select facultyName from faculty where facultyID='$id'";
$cr=$con->query($sql3);
$rec2=mysqli_fetch_array($cr);
        //   echo $rec2['subjectID'];
            
            ?>
            
            </p>
        
        

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <ul class="nav navbar-nav">
          <li><a href="facultyhome.php">Home</a></li>
          <li  class="active"><a href="subjects.php">Subjects</a></li>
        </ul>    
      </div>
    </nav>

    <div class="content container">
      <div class="row">
        <section class="col-xs-12">
<br><br><br>

    <h1><?php echo $rec2['facultyName']; ?></h1>

    <h2>Subject List</h2>
    <p></p>

             <table class="table table-striped">
            <thead>
              <tr><th>Subject Name</th><th>Subject ID</th>
              </tr>
            </thead>
            <tbody>
                <?php
                
                while ($row=mysqli_fetch_row($ar))
                { //$row1=mysqli_fetch_row($br)
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
		   <h3>Total Number of subjects taught: <?php echo $row_cnt; ?></h3>
		  
		  
        </section>
      </div><!-- row -->   
    </div><!-- content container -->


    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    </body>
    </html>