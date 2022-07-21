<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile_updation</title>
  <style>
   body{
  background-color: whitesmoke;
  text-align: center;
}

   input{
  width: 40%;
  height: 15%;
  border: 1px;
  border-radius: 05px;
  padding: 8px 15px 8px 15px;
  margin: 10px 0px 15px 0px;
  box-shadow: 1px 1px 2px 1px grey;
}

</style>
</head>
<body>
      <h1>Provide New Data To Be Updated<h1>

         <form action="" method="POST">
              <input type="text" name="email" placeholder="Enter New Email"/><br>
              <input type="password" name="password" placeholder="Enter New Password"/><br>
              <input type="text" name="user" placeholder="Enter New Name"/><br>
              <input type="text" name="contact" placeholder="Enter New Contact No."/><br>
              <input type="submit" name="update"  value="UPDATE DATA"/>
               </form>
 
</body>
</html>
<?php
 

 $con = mysqli_connect('localhost','root','');

 mysqli_select_db($con,'final');

 if(isset($_POST['update']))
  {
    $email = $_SESSION['email'];
    $sql = "UPDATE `new` SET user='$_POST[user]',password='$_POST[password]',contact='$_POST[contact]' where email='$_SESSION[email]'";
    $result = mysqli_query($con,$sql);

    if($result)
    {
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
        echo '<a href="login.php" target="_blank">Back To Login Page</a>'; 
        }
        else
        {
            echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
            header('location:update.php');
        }
  }
  ?>


















