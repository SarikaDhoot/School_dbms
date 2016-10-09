<?php
$con = mysqli_connect("localhost","root","","dbms project");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
    echo "Connected!!";
}


$uname=$_POST['username']; 
$sql="select * from student where sName='$uname'";
$a=$con->query($sql);
$rec2=mysqli_fetch_array($a);

    echo $rec2['s_ID'];
    echo $rec2['sName'];
    echo $rec2['sAddress'];
    echo $rec2['sContactNo'];
    echo $rec2['sDivision'];
echo $rec2['sDateOfBirth'];
echo $rec2['sParentName'];
echo $rec2['pContactNo'];
echo $rec2['sEmailID'];
    

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
        <p><?php
$con = mysqli_connect("localhost","root","","dbms project");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
    echo "Connected!!";
}


$uname=$_POST['username']; 
$sql="select * from student where sName='$uname'";
$a=$con->query($sql);
$rec2=mysqli_fetch_array($a);

    echo $rec2['s_ID'];
    echo $rec2['sName'];
    echo $rec2['sAddress'];
    echo $rec2['sContactNo'];
    echo $rec2['sDivision'];
echo $rec2['sDateOfBirth'];
echo $rec2['sParentName'];
echo $rec2['pContactNo'];
echo $rec2['sEmailID'];
    

?>    
</p>
   

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <ul class="nav navbar-nav">
          <li  class="active"><a href="#">Home</a></li>
          <li><a href="Course.php? txtid1=<?php echo $rec2['s_ID']; ?>">Subjects</a></li>
            
          <li><a href="Grades.php? txtid2=<?php echo $rec2['s_ID']; ?>">Grades</a></li>
        </ul>    
      </div>
    </nav>

    <div class="content container">
      <div class="row">
        <section class="col-xs-12">

    <p></p>
<br><br>
    <h1><?php echo $rec2['sName']; ?></h1>

    <h2>Personal Details</h2>
    <p></p>
            <form name="studentform" method="post" action="studentedit.php? txtid=<?php echo $rec2['s_ID'];?>" id="studentform">

            <table class="table table-striped">
            <thead>
              <tr>
              </tr>
            </thead>
            <tbody>
                    <tr>
                <th scope="row">ID</th>
                <td><?php echo $rec2['s_ID']; ?></td>
              </tr>
                
                 <tr>
                <th scope="row">Division</th>
                <td><?php echo $rec2['sDivision']; ?></td>
              </tr>
                              
                        
              <tr>
                <th scope="row">Address</th>
                <td><?php echo $rec2['sAddress']; ?></td>
              </tr>
                                      <tr>
                <th scope="row">Contact No.</th>
                <td><?php echo $rec2['sContactNo']; ?></td>
              </tr>
              <tr>
                <th scope="row">Parent Name</th>
                <td><?php echo $rec2['sParentName']; ?></td>
              </tr>

                          <tr>
                <th scope="row">Parent Contact No.</th>
                <td><?php echo $rec2['pContactNo']; ?></td>
              </tr>
              <tr>
                <th scope="row">Date of Birth</th>
                <td><?php echo $rec2['sDateOfBirth']; ?></td>
              </tr>
              <tr>
                <th scope="row">E-mail</th>
                <td><?php echo $rec2['sEmailID']; ?></td>
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