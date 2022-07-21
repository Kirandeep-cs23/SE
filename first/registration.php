<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="logstyle.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>User_Registration</title>
</head>
<body>
<div class="container">
     <div class="login-box">
     <div class="row">
<div class="mt-10">
         <h2>Register Here</h2>
         <form action="registration.php" method="post">
         <div class="form-group">
             <label>Email</label>
             <input type="email" name="email" class="form-control" required>
          </div>
           <div class="form-group">
             <label>Username</label>
             <input type="text" name="user" class="form-control" required>
          </div>
          <div class="form-group">
             <label>Password</label>
             <input type="password" name="password" class="form-control" required>
          </div>
          <div class="form-group">
             <label>Contact</label>
             <input type="text" name="contact" class="form-control" required>
          </div>
          <div class="form-group">
          <button type="submit" name="register" class="btn btn-primary">Register</button>
</div>
      
<div class="form-group">
           <?php
 
 session_start();
 $con = mysqli_connect('localhost','root','');

 mysqli_select_db($con,'final');
 if(isset($_POST['register'])){

 $email = $_POST['email'];
 $pass = $_POST['password'];
 $name = $_POST['user'];
 $contact = $_POST['contact'];

 $s = " select * from new where email = '$email'";
  
 $result = mysqli_query($con,$s);

 $num = mysqli_num_rows($result);

 if($num == 1){
   echo'<script type="text/javascript">alert("This Email Is Already Registered.Kindly Login.")</script>';
   echo '<a class="btn btn-outline-primary" href="login.php" role="button">Login</a>'; 
  }else{
   $reg= "insert into new(email,password,user,contact) values ('$email','$pass','$name','$contact')";
   mysqli_query($con,$reg);
   echo'<script type="text/javascript">alert("Registration Successful.")</script>';
      echo '<a class="btn btn-outline-primary" href="login.php" role="button">Login</a>'; 
 }
 }
 ?>
 </div>
 </form>
           </div>
     </div>
   </div>
  </div>
</body>
</html>