
<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="trv.css">
    <script src="https://kit.fontawesome.com/624c5ad2e9.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
  <section class="header">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
                <div class="logo">
                <i class="fa fa-umbrella-beach"></i>
                           </div>
                <div class="container-md">
                  <a class="navbar-brand" href="#">Odisha Travelscape</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav justify-content-center">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <!-- <li class="nav-item">
                        <a class="nav-link" href="#feature">Features</a>
                      </li> -->
                      <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">More About Us</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Account
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="registration.php">Register</a></li>
                          <li><a class="dropdown-item" href="login.php">Log in</a></li>
                          <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                        </ul>
                      </li>
                    
                      <li class="nav-item">
                      <a class="nav-link" href="#">
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
        echo 'Welcome '. $row["user"];
    }
    } else {
        echo "0 results";
}
mysqli_close($conn);
}
else{

}
?>        
</a>
</li>
                      <li class="nav-item">
                      <a class="nav-link" href="logout.php"><?php if(isset($_SESSION['email'])) { echo 'Logout' ; } ?> </a>
                      </li>
</ul>
</nav>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</section>
<section class="main">
<div class = "slide">
        <div class="element">
  <div class="mySlides">
    <img src="image/55.JPG" width = "100%" height = "500px">
  </div>
  <div class="mySlides">
    <img src="image/22.JPG" width = "100%" height = "500px">
  </div>
  <div class="mySlides">
    <img src="image/66.JPG" width = "100%" height = "500px">
  </div>
  <div class="mySlides">
    <img src="image/44.JPG" width = "100%" height = "500px">
  </div>
  </div>
</div>
</section>
<!-- Remove the container if you want to extend the Footer to full width. -->

  <!-- Footer -->
  <footer
        id="contact"
          class="text-center text-lg-start text-white"
          style="background-color: #1c2331"
          >
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-4"
             style="background-color: #6351ce"
             >
      <!-- Left -->
      <div class="me-5">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="https://www.facebook.com/" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://twitter.com/" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="https://www.instagram.com/" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.linkedin.com/" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="https://www.github.com/" class="text-white me-4">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">Odisha Travelscape</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              Established in 2022,Odisha Travels provides great offers,exclusive discounts and a seamless online booking experience to many of its customers.  The experience of booking your train tickets, hotel stay, and holiday package through our desktop site or mobile app can be done with complete ease and no hassles at all.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Useful links</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-white">Blog</a>
            </p>
            <p>
              <a href="#!" class="text-white">Event</a>
            </p>
            <p>
              <a href="#!" class="text-white">Career</a>
            </p>
            <p>
              <a href="#!" class="text-white">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">About This Site</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-white">Privacy Policy</a>
            </p>
            <p>
              <a href="#!" class="text-white">Terms & Conditions</a>
            </p>
            <p>
              <a href="#!" class="text-white">Payment Security</a>
            </p>
            <p>
              <a href="#!" class="text-white">Pricing & Refund Policy</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i>Berhampur, Ganjam , Odisha</p>
            <p><i class="fas fa-envelope mr-3"></i> contact@odishatravels.com</p>
            <p><i class="fas fa-phone mr-3"></i>1800-400-3989</p>
            <p><i class="fas fa-print mr-3"></i>1800-500-4678</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
         <p>copyright &copy; <script>document.write(new Date().getFullYear());</script> Moviesite. designed by <span>kirandeep</span></p>  
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

</div>
<!-- End of .container -->
<script>
var slideIndex = -1;
showSlides();


function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length-1) {slideIndex = 0}    
  slides[slideIndex].style.display = "block";  
  setTimeout(showSlides, 3000); 
}
</script>
  </body>
</html>