<?php
session_start();
include_once('includes/db.php');
if(isset($_SESSION['email'])){
  header('location:welcome.php');
}
if(isset($_POST['submit']))
 {
$email=$_POST['email'];
$password=$_POST['password'];
$login="SELECT dob,country,county,tel,password,email,e.name as role ,fullname,e.name as stage FROM `staff` s JOIN `cate` e USING(cate_id) WHERE email='$email' AND password='$password'";

$check=mysqli_query($conn,$login);
$query=mysqli_fetch_array($check);
if($query > 0){
  $stage=$query['stage'];
  $_SESSION['fullname']=$query['fullname'];
  $_SESSION['role']=$query['role'];
  $_SESSION['dob']=$query['dob'];
  $_SESSION['country']=$query['country'];
  $_SESSION['county']=$query['county'];
  $_SESSION['tel']=$query['tel'];
  $_SESSION['stage']=$query['stage'];
    $_SESSION['email']=$query['email'];
    header("location:welcome.php");
  }
  else{
    $msg="invalid credentials";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>
<body class="d-flex justify-content-center  mt-5 ">
    <div class="card p-3 " style="width: 28rem;">
        <h1 class=" pt-3 pb-3">Login</h1>
        <form action="" method="post">
  <div class="mb-3">
    
      <?php if(isset($msg)) {?> <span class="alert alert-danger"><?php echo $msg;?></span><br><br> <?php }?>
    
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</body>
</html>