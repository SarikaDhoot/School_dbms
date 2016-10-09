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

        
<div class="container">
  <div class="row">
    <section class="col-xs-12">
        
        <h2>Fill Student Details</h2>

        <form method="post" action="addstudent1.php">

  <label for="s_ID">Student ID</label>
  <input class="form-control" type="text" id="s_ID" name="s_ID"
    placeholder="Student ID">
            
      <label for="sName">Student Name</label>
  <input class="form-control" type="text" id="sName" name="sName"
    placeholder="Student Name">
            
            
      <label for="sAddress">Address</label>
  <input class="form-control" type="text" id="sAddress" name="sAddress"
    placeholder="Address">
            
            
      <label for="sContactNo">Contact No</label>
  <input class="form-control" type="text" id="sContactNo" name="sContactNo"
    placeholder="Contact No">
            
            
      <label for="sDivision">Division</label>
  <input class="form-control" type="text" id="sDivision" name="sDivision"
    placeholder="Division">
            
      <label for="sParentName">Parent Name</label>
  <input class="form-control" type="text" id="sParentName" name="sParentName"
    placeholder="Parent Name">
            
            
      <label for="pContactNo">Address</label>
  <input class="form-control" type="text" id="pContactNo" name="pContactNo"
    placeholder="Parent Contact No">
            
            
      <label for="sDateOfBirth">Date Of Birth</label>
  <input class="form-control" type="text" id="sDateOfBirth" name="sDateOfBirth"
    placeholder="DOB">
                    
            
     
            
            
      <label for="sEmailID">Student Email ID</label>
  <input class="form-control" type="text" id="sEmailID" name="sEmailID"
    placeholder="Student E-mail ID">     
            
            
            <button type="button"
                    class="btn btn-default" onclick="submit()" >Add Student</button>
    
</form>
      </section>

        
          </div><!-- row -->   
</div><!-- content container -->


<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
