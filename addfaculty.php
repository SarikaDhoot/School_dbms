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
        
        <h2>Fill Faculty Details</h2>

        <form method="post" action="addfaculty1.php">

  <label for="facultyID">Faculty ID</label>
  <input class="form-control" type="text" id="facultyID" name="facultyID"
    placeholder="ID">
            
      <label for="facultyName">Faculty Name</label>
  <input class="form-control" type="text" id="facultyName" name="facultyName"
    placeholder="Name">
            
            
      <label for="facultyAddress">Faculty Address</label>
  <input class="form-control" type="text" id="facultyAddress" name="facultyAddress"
    placeholder="Address">
            
            
      <label for="facultyContactNo">Faculty Contact No</label>
  <input class="form-control" type="text" id="facultyContactNo" name="facultyContactNo"
    placeholder="Contact No">
            
            
      <label for="facultyDesignation">Faculty Designation</label>
  <input class="form-control" type="text" id="facultyDesignation" name="facultyDesignation"
    placeholder="Designation">
            
      <label for="facultySalary">Faculty Salary</label>
  <input class="form-control" type="text" id="facultySalary" name="facultySalary"
    placeholder="Salary">
            
            
      <label for="facultyQualification">Faculty Qualification</label>
  <input class="form-control" type="text" id="facultyQualification" name="facultyQualification"
    placeholder="Parent Contact No">
            
            
      <label for="managerID">Manager ID</label>
  <input class="form-control" type="text" id="managerID" name="managerID"
    placeholder="DOB">
                    
            
             <label for="facultyEmailID">E-mail ID</label>
  <input class="form-control" type="text" id="facultyEmailID" name="facultyEmailID"
    placeholder="E-mail ID">
            
            
            <button type="button"
                    class="btn btn-default" onclick="submit()" >Add Faculty</button>
    
</form>
      </section>

        
          </div><!-- row -->   
</div><!-- content container -->


<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
