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
        
        <h2>Remove Faculty</h2>

        <form method="post" action="deletefaculty1.php">
            
  <label for="facultyID">Faculty ID</label>
  <input class="form-control" type="text" id="facultyID" name="facultyID"
    placeholder="Faculty ID">

      <br><br>
            
            <button type="button"
                    class="btn btn-default" onclick="submit()" >Remove Faculty</button>
  
</form>
      </section>

        
          </div><!-- row -->   
</div><!-- content container -->


<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
