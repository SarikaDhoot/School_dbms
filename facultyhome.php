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
        
    <?php
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
$uname1=$_POST['username1']; 
$sql="select * from faculty where facultyName='$uname1'";
$a=$con->query($sql);
$rec2=mysqli_fetch_array($a);


 /*   echo $rec2['s_ID'];
    echo $rec2['sName'];
    echo $rec2['sAddress'];
    echo $rec2['sContactNo'];
    echo $rec2['sDivision'];
echo $rec2['sDateOfBirth'];
echo $rec2['sParentName'];
echo $rec2['pContactNo'];
echo $rec2['sEmailID']; */
    

?>   

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <ul class="nav navbar-nav">
          <li  class="active"><a href="facultyhome.php">Home</a></li>
          <li><a href="subjects.php? txtid3=<?php echo $rec2['facultyID']; ?>">Subjects</a></li>
        </ul>    
      </div>
    </nav>

    <div class="content container">
      <div class="row">
        <section class="col-xs-12">

    <h2><?php echo $rec2['facultyName']; ?></h2>
            <p></p>

    <h2>Personal Details</h2>
    <p></p>
 <form name="facultyform" method="post" action="facultyedit.php? txtid4=<?php echo $rec2['facultyID'];?>" id="facultyform">
            <table class="table table-striped">
            <thead>
              <tr>
              </tr>
            </thead>
            <tbody>
                    <tr>
                <th scope="row">ID</th>
                <td><?php echo $rec2['facultyID']; ?></td>
              </tr>
              <tr>
                <th scope="row">Designation</th>
                <td><?php echo $rec2['facultyDesignation']; ?></td>
              </tr>
              <tr>
                <th scope="row">Address</th>
                <td><?php echo $rec2['facultyAddress']; ?></td>
              </tr>
              <tr>
                <th scope="row">Contact No</th>
                <td><?php echo $rec2['facultyContactNo']; ?></td>
              </tr>

              <tr>
                <th scope="row">Salary</th>
                <td><?php echo $rec2['facultySalary']; ?></td>
              </tr>
              <tr>
                <th scope="row">Qualification</th>
                <td><?php echo $rec2['facultyQualification']; ?></td>
              </tr>
              <tr>
                <th scope="row">E-mail</th>
                <td><?php echo $rec2['facultyEmailID']; ?></td>
              </tr>
              <tr>
            </tbody>
          </table>

           <button type="button"
                    class="btn btn-default" onclick="submit()" >Edit</button>
            </form>
			
			<br>
			
			<a href="index.html">Home</a>

        </section>
      </div><!-- row -->   
    </div><!-- content container -->


    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    </body>
    </html>