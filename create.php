<?php include_once "autoload.php"; ?>
<?php
    $connection= new mysqli ('localhost','root','','bussniess_management')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
    <?php 
            if(isset($_POST['add'])){
                //get value//
                $name = $_POST ['name'];
                $email = $_POST ['email'];
                $cell  = $_POST ['cell'];
                $location = $_POST ['location'];

                //validation//
                if(empty($name)|| empty($email)||empty($cell)){
                    $msg = validate("All Fields are Require") ;
                }else{
                     $Sql = "INSERT  INTO students (name,email,cell,location) VALUES ('$name',' $email',' $cell',' $location')";
                     $connection->query( $Sql);
                     $msg= validate('Data Stable','success');
                }
            }
     ?>

    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-md-6">
            <a href="" class="btn btn-primary mb-2">All Student</a>
                <div class="card">
                    <div class="card-header">
                        <h3>Registration Form</h3>
                        <?php
                            if(isset($msg)){
                                echo $msg ;
                            }
                        ?>
                       
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" placeholder="Enter Your name" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="">E-mail</label>
                            <input type="text" name="email" placeholder="Enter Your E-mail" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="">Cell</label>
                            <input type="text" name="cell" placeholder="Enter Your Cell" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="">Location</label>
                            <input type="text" name="location" placeholder="" class="form-control" >
                        </div>
                        
                       
                        <div class="form-group">
                       <input name="add" type="submit" value="Sign Up">
                        </div>
                        <div class="form-group">
                        <a name="add" href="index.php" class="btn btn-primary mb-2">back</a>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
<script src="assets/js/jquery-3.2.1.slim.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>