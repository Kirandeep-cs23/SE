<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="logstyle.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>User_Login</title>
</head>
<body>
   <div class="container">
     <div class="login-box">
     <div class="row">
       <div class="col-md-6 login-left">
         <h2>LoginHere</h2>
         <form action="" method="post">
         <div class="form-group">
             <label>Email</label>
             <input type="email" name="email" class="form-control" required>
          </div>
          <div class="form-group">
             <label>Password</label>
             <input type="password" name="password" class="form-control" required>
          </div>
          <button type="submit" name="login" class="btn btn-primary">Login</button>
      </form>
           </div>
           
       </div>
     </div>
   </div>
   <?php
  
  $con = mysqli_connect('localhost','root','');

  mysqli_select_db($con,'final');

  if(isset($_POST['login'])){
  $email = $_POST['email'];
  $pass = $_POST['password'];




  $s = " select * from new where Email = '$email' && password ='$pass'";
   
  $result = mysqli_query($con,$s);

  $num = mysqli_num_rows($result);
  if($num == 1){
      $_SESSION['email'] = $email;
      header('location:travel.php');
  }else{
    echo '<script type="text/javascript"> alert("Wrong Login Credentials") </script>';
}
}


  ?>
  
</body>
</html>