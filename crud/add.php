<?php
include('dbcon.php');
if(isset($_POST['adds'])){
    
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $age = $_POST['age'];

    
      $query = "insert into students (`first_name`, `last_name`, `age`) values ('$fname', '$lname', '$age')";
      $result = mysqli_query($connection,$query);
      
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add student</title>
    <style>
        @media (min-width: 1025px) {
             .h-custom {
             height: 100vh !important;
              }
              
}
    </style>
</head>
<body>
<section class="h-100 h-custom" style="background-color: purple;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">ADD STUDENT</h3>

            <form class="px-md-2" action="add.php" method="POST">

              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="f_name" class="form-control" />
                <label class="form-label" for="form3Example1q">FIRST Name</label>
              </div>

              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="l_name" class="form-control" />
                <label class="form-label" for="form3Example1q">LAST Name</label>
              </div>
              

              

              <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                <div class="col-md-6">

                  <div class="form-outline">
                    <input type="number" id="form3Example1w" name="age" class="form-control" />
                    <label class="form-label" for="form3Example1w">AGE</label>
                  </div>

                </div>
              </div>

              <button type="submit" class="btn btn-success btn-lg mb-1" name="adds">ADD</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>