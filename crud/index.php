<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home Page</title>
    <style>
        html,
body,
.intro {
  height: 100%;
}

table td,
table th {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}

.mask-custom {
  background: rgba(24, 24, 16, .2);
  border-radius: 2em;
  backdrop-filter: blur(25px);
  border: 2px solid rgba(255, 255, 255, 0.05);
  background-clip: padding-box;
  box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
}
#main_title{
    text-align: center;
    background-color: #333;
    color: #fff;
    letter-spacing: 2px;
    font-weight: 500;
    height: 200px;
    padding: 65px; 
}
#a{
    margin-top: 0px;
    padding: 100px;
}
.btn {
    margin-left: 680px;
    margin-bottom: 50px;
    background-color: purple;
    font-weight: 700;
}
    </style>
</head>
<body>
    <?php include('dbcon.php'); ?>
    <h1 id="main_title">CRUD OPERATION IN APP</h1>
<section class="intro">
  <div class="bg-image h-100" style="background-image: url(https://mdbootstrap.com/img/Photos/new-templates/glassmorphism-article/img7.jpg);">
  <div id="a">
    <button class="btn btn-primary border" data-toggle="modal" data-target="#exampleModal"><a href="add.php" style="text-decoration: none; color: #fff;"> ADD STUDENT</a></button>
    
    <!--models end-->
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card mask-custom">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-borderless text-white mb-0" >
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">AGE</th>
                        <th scope="col">Update</th>
                        <th scope="col">Remove</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php

                        $querys = "SELECT * FROM students";
                        $result = mysqli_query($connection,$querys);

                        if(!$result){
                            die("Query faiked");  
                          }
                          else{

                            while($row = mysqli_fetch_assoc($result)){
                                ?>

                                <tr>
                                  <th scope="row"><?php echo $row['id']; ?></th>
                                  <td><?php echo $row['first_name']; ?></td>
                                  <td><?php echo $row['last_name']; ?></td>
                                  <td><?php echo $row['age']; ?></td>
                                  <td><a href="update.php?id=<?php echo $row['id']; ?>" style="text-decoration: none; color:#fff"> Update</a></td>
                                  <td><a href="remove.php?id=<?php echo $row['id']; ?>" style="text-decoration: none; color:#fff"> Remove</a></td>
                                </tr>
                                

                                <?php
                                
                            }
                           
                          }

                        ?>
                      
                     
                    </tbody>
                  </table>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>
</body>
</html>