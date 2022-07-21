<?php
 
  session_start();
  header('location:index.php');
 
  $con = mysqli_connect('localhost','root','');

  mysqli_select_db($con,'final');

  $email = $_POST['email'];
  $name = $_POST['name'];

  $s = " select * from wishlist where email = '$email' && name = '$name'";
   
  $result = mysqli_query($con,$s);

  $num = mysqli_num_rows($result);
  if($num > 0){
    $reg= "delete from wishlist where name = '$name'";
    mysqli_query($con,$reg);
    echo "Movie removed from wishlist";
  }else{
    $reg= "insert into wishlist(email,name) values ('$email','$name')";
    mysqli_query($con,$reg);
    echo "Movie added in wishlist";
  }


  // To get current logged in user wishlisted movies
  $watchlistQuery = " select * from wishlist where email = '$email'"; 
  $watchlistResult = mysqli_query($con,$watchlistQuery);
  $movieCount = mysqli_num_rows($watchlistResult);
    
    $_SESSION['movieNames'] = array();
    if($movieCount > 0) {
        while($movieCount > 0) {
            $row = mysqli_fetch_assoc($watchlistResult);
            array_push($_SESSION['movieNames'], $row['name']);
            $movieCount--;
        }
    }

    
    header('location:index.php');
  ?>