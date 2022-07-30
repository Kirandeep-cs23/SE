<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="profile.css">
  <title>User_profile</title>
</head>
<body style ="background-color: whitesmoke;">
  <div class="heading">
    <h1>Profile<h1>
</div>
    <div class="col">
        <div class="block">
         <div class="info">Email</div>
         <div class="details">
            <?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect('localhost','root','','final');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_SESSION['email'])){
$email = $_SESSION['email'];
$sql = "SELECT * FROM new where Email='$email'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo ':   '. $row["email"];
    }
    } else {
    echo "0 results";
}
}
mysqli_close($conn);
?>
</div>
</div>
       <div class="block"> <div class="info">Username</div>
       <div class="details">
         <?php       
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect('localhost','root','','final');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_SESSION['email'])){
$email = $_SESSION['email'];
$sql = "SELECT * FROM new where email='$email'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo ':   '. $row["user"];
    }
    } else {
    echo "0 results";
}
}
mysqli_close($conn);
?>        
</div>
</div>
       <div class="block"> <div class="info">Password</div>
       <div class="details">
         <?php       
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect('localhost','root','','final');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_SESSION['email'])){
$email = $_SESSION['email'];
$sql = "SELECT * FROM new where email='$email'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo ':   '. $row["password"];
    }
    } else {
    echo "0 results";
}
}
mysqli_close($conn);
?>        
</div>
</div>
       <div class="block"> <div class="info">Contact</div>
       <div class="details">
         <?php       
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect('localhost','root','','final');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_SESSION['email'])){
$email = $_SESSION['email'];
$sql = "SELECT * FROM new where email='$email'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo ':   '. $row["contact"];
    }
    } else {
    echo "0 results";
}
}
mysqli_close($conn);
?>        
</div>
</div>
</div>
<div><a class="button" href="update.php" target="_blank">UPDATE PROFILE</a></div>
<div><a href="logout.php"><?php if(isset($_SESSION['email'])) { echo 'Logout' ; } ?> </a></div>

    </div>

</body>
</html>
