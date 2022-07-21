<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="trial.css">
    <script src="https://kit.fontawesome.com/624c5ad2e9.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Josefin+Sans:ital,wght@0,300;0,500;1,500&family=Open+Sans:wght@300;400;500&family=Oswald:wght@400;500&family=Roboto:wght@500&family=Vujahday+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,500;1,500&family=Open+Sans:wght@300;400;500&family=Oswald:wght@400;500&family=Roboto:wght@500&family=Vujahday+Script&display=swap" rel="stylesheet"></head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    
    <title>Movie website design</title>
</head>
<body>
<section class="header">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(133, 15, 230);">
                <div class="logo">
                    <i class="fas fa-tv"></i>    
                </div>
                <div class="container-md">
                  <a class="navbar-brand" href="#">Movie Site</a>
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
                  </div>
                  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for movies or web series" title="Type in a name">
                </div>
</nav>
<div class = "slide">

        <h3>Featured Today</h3>

        <div class="element">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="image/p5.jpg" width = "100%" height = "700px">
    <p>The Girl with the Dragon Tattoo<br>Thriller | 158 Min</p>
    <p class="mmiddle"><a href="https://tv.apple.com/in/movie/the-girl-with-the-dragon-tattoo/umc.cmc.3xurji5y3xzb0sjj3xwc6s868?action=play" target="_blank" class="buttonn">Watch now</a></p>
    <p class="nmiddle"><a href="https://youtu.be/PQuwM7RV9fQ" target="_blank" class="buttonn">Watch trailer</a></p>
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="image/ppp4.jpg" width = "100%" height = "700px">
    <p>The Grinch<br>Comedy | 85 Min</p>
    <p class="mmiddle"><a href="https://tv.apple.com/in/movie/the-grinch/umc.cmc.2bu7hwru4lky6tgu9a91trvr4?action=play" target="_blank" class="buttonn">Watch now</a></p>
    <p class="nmiddle"><a href="https://youtu.be/fykfDyXbr78" target="_blank" class="buttonn">Watch trailer</a></p>
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="image/pp5.jpg" width = "100%" height = "700px">
    <p>Exodus: Gods and Kings<br> Adventure | 150 Min</p>
    <p class="mmiddle"><a href="https://tv.apple.com/in/movie/exodus-gods-and-kings/umc.cmc.2xwdqxnrlk0hnk7kd25wvwjpl?action=play" target="_blank" class="buttonn">Watch now</a></p>
    <p class="nmiddle"><a href="https://youtu.be/t-8YsulfxVI" target="_blank" class="buttonn">Watch trailer</a></p>
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="image/pppp1.jpg" width = "100%" height = "700px">
    <p>Oblivion<br>Sci-fi | 124 Min</p>
    <p class="mmiddle"><a href="https://www.primevideo.com/dp/amzn1.dv.gti.f0b3f9fb-21de-5a91-d788-682fd6baf92d?autoplay=1&ref_=atv_cf_strg_wb" target="_blank" class="buttonn">Watch now</a></p>
    <p class="nmiddle"><a href="https://youtu.be/XmIIgE7eSak" target="_blank" class="buttonn">Watch trailer</a></p>
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="image/ppp3.jpg" width = "100%" height = "700px">
    <p>Spectre<br>Action  | 148 Min</p>
    <p class="mmiddle"><a href="https://www.primevideo.com/dp/amzn1.dv.gti.8e2a27f5-6771-480a-8e76-abe40d60b39a?autoplay=1&ref_=atv_cf_strg_wb" target="_blank" class="buttonn">Watch now</a></p>
    <p class="nmiddle"><a href="https://youtu.be/ujmoYyEyDP8" target="_blank" class="buttonn">Watch trailer</a></p>
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="image/p9.jpg" width = "100%" height = "700px">
    <p>The Hunger Games: Catching Fire<br>Action | 146 Min</p>
    <p class="mmiddle"><a href="https://www.primevideo.com/dp/amzn1.dv.gti.aabbda94-e8d7-5883-ac1e-142cfe6edec2?autoplay=1&ref_=atv_cf_strg_wb" target="_blank" class="buttonn">Watch now</a></p>
    <p class="nmiddle"><a href="https://youtu.be/EAzGXqJSDJ8" target="_blank" class="buttonn">Watch trailer</a></p>
  </div>  
  </div>
</div>

</section> 
<section>
      <div class="header2" id="movies_list" style="display:none;">
        <div class="clm">
            <img src="image/11.jpg" alt="" class="image" style="width: 100%;">
            <p class="text">No Time to Die</p>
            <p class="middle"><a href="https://www.youtube.com/watch?v=IA0v-DeyrCs" target="_blank" class="button">Watch now</a></p>
            </div>
        <div class="clm">
            <img src="image/012.jpg" alt="" class="image" style="width: 100%;">
            <p class="text">The Matrix Resurrections</p>
            <p class="middle"><a href="https://youtu.be/9ix7TUGVYIo" target="_blank" class="button">Watch now</a></p>
            </div>
        <div class="clm">
            <img src="image/013.jpg" alt="" class="image" style="width: 100%;">
            <p class="text">The King's Man</p>
            <p class="middle"><a href="https://youtu.be/5zdBG-iGfes" target="_blank" class="button">Watch now</a></p>
            </div>
        <div class="clm">
            <img src="image/14.jpg" alt="" class="image" style="width: 100%;"> 
            <p class="text">Red Notice</p>
            <p class="middle"><a href="https://www.netflix.com/in/title/81161626?source=35" target="_blank" class="button">Watch now</a></p>
            </div>
        <div class="clm">
            <img src="image/016.jpg" alt="" class="image" style="width: 100%;">
            <p class="text">Venom: Let There Be Carnage</p>
            <p class="middle"><a href="https://tv.apple.com/in/movie/venom-let-there-be-carnage/umc.cmc.2s9m38fifjsags9h5ghygfilr?action=play" target="_blank" class="button">Watch now</a></p>
            </div>
        <div class="clm">
            <img src="image/017.jpg" alt="" class="image" style="width: 100%;">
            <p class="text">The Lost Daughter</p>
            <p class="middle"><a href="https://www.netflix.com/in/title/81478910?source=35" target="_blank" class="button">Watch now</a></p>
            </div>
        <div class="clm">
            <img src="image/018.jpg" alt="" class="image"style="width: 100%;">
            <p class="text">The Last Duel</p>
            <p class="middle"><a href="https://www.hotstar.com/in/movies/the-last-duel/1260074851/watch?utm_source=gwa" target="_blank" class="button">Watch now</a></p>
        </div>
        <div class="clm">
            <img src="image/83.jpeg" alt="" class="image" style="width: 100%;">
            <p class="text">Cruella</p>
            <p class="middle"><a href="https://www.hotstar.com/in/movies/cruella/1260067149/watch?utm_source=gwa" target="_blank" class="button">Watch now</a></p>
        </div>
        <div class="clm">
            <img src="image/21.jpg" alt="" class="image" style="width: 100%;">
            <p class="text">Eternals</p>
            <p class="middle"><a href="https://www.hotstar.com/in/movies/eternals/1260077949/watch?utm_source=gwa" target="_blank" class="button">Watch now</a></p>
        </div>
        <div class="clm">
            <img src="image/22.jpg" alt="" class="image" style="width: 100%;">
            <p class="text">Don't look up</p>
            <p class="middle"><a href="https://www.netflix.com/in/title/81252357?source=35" target="_blank" class="button">Watch now</a></p>
        </div>
        <div class="clm">
            <img src="image/26.jpg" alt="" class="image" style="width: 100%;"> 
            <p class="text">Dune</p>
            <p class="middle"><a href="https://tv.apple.com/in/movie/dune/umc.cmc.2l7qj9p33t3jww1roxi8cgiw5?action=play" target="_blank" class="button">Watch now</a></p>
        </div>
        <div class="clm">
            <img src="image/23.jpg" alt="" class="image" style="width: 100%;">
            <p class="text">The Boss Baby 2</p>
            <p class="middle"><a href="https://tv.apple.com/in/movie/the-boss-baby-family-business/umc.cmc.2wljqyavfsp0ab6g7y13fx8rj?action=play" target="_blank" class="button">Watch now</a></p>
        </div>
        <div class="clm">
            <img src="image/24.jpg" alt="" class="image" style="width: 100%;">
            <p class="text">Black Widow</p>
            <p class="middle"><a href="https://www.hotstar.com/in/movies/black-widow/1260067485/watch?utm_source=gwa" target="_blank" class="button">Watch now</a></p>
        </div>
        <div class="clm">
                <img src="image/25.jpg" alt="" class="image"style="width: 100%;">
                <p class="text">Spider-Man: No Way Home</p>
                <p class="middle"><a href="https://youtu.be/hpQQmyvDDqs" target="_blank" class="button">Watch now</a></p>
        </div>
        <div class="clm">
            <img src="image/30.jpg" alt="" class="image" style="width: 100%;">
            <p class="text">Reminiscence</p>
            <p class="middle"><a href="https://www.primevideo.com/detail/amzn1.dv.gti.7236e469-eb10-438f-9c0c-f7bf6306fdbf?ref_=av_auth_return_redir&autoplay=1" target="_blank" class="button">Watch now</a></p>
        </div>
        <div class="clm">
            <img src="image/31.jpg" alt="" class="image" style="width: 100%;">
            <p class="text">Don't Breathe 2</p>
            <p class="middle"><a href="https://tv.apple.com/in/movie/dont-breathe-2/umc.cmc.68vpkshba1dl2kib9ptun12ky?action=play" target="_blank" class="button">Watch now</a></p>
        </div>
        <div class="clm">
            <img src="image/33.jpg" alt="" class="image" style="width: 100%;">
            <p class="text">Hitman's Wife's Bodyguard</p>
            <p class="middle"><a href="https://www.primevideo.com/dp/amzn1.dv.gti.d7b4d26c-9f89-41ce-a124-a1a6f873bd30?autoplay=1&ref_=atv_cf_strg_wb" target="_blank" class="button">Watch now</a></p>
        </div>
        <div class="clm">
            <img src="image/36.jpg" alt="" class="image" style="width: 100%;"> 
            <p class="text">The Power of the Dog</p>
            <p class="middle"><a href="https://www.netflix.com/in/title/81127997?source=35" target="_blank" class="button">Watch now</a></p>
        </div>
        <div class="clm">
            <img src="image/37.jpg" alt="" class="image" style="width: 100%;">
            <p class="text">Shang-Chi</p>
            <p class="middle"><a href="https://www.hotstar.com/in/movies/shangchi-and-the-legend-of-the-ten-rings/1260072682/watch?utm_source=gwa" target="_blank" class="button">Watch now</a></p>
        </div>
        <div class="clm">
            <img src="image/34.jpg" alt="" class="image" style="width: 100%;">
            <p class="text">The Green Knight</p>
            <p class="middle"><a href="https://www.primevideo.com/dp/amzn1.dv.gti.6fe46e47-c615-4611-8e2d-a69ae1c02acd?autoplay=1&ref_=atv_cf_strg_wb" target="_blank" class="button">Watch now</a></p>
        </div>
        <div class="clm">
                <img src="image/35.jpg" alt="" class="image"style="width: 100%;">
                <p class="text">Malignant</p>
                <p class="middle"><a href="https://tv.apple.com/in/movie/umc.cmc.ch3vv2ouftf7bdf1dw3h70iw?action=play" target="_blank" class="button">Watch now</a></p>
        </div>
        <div class="clm">
            <img src="image/40.jpg" alt="" class="image" style="width: 100%;">
            <p class="text">The Wheel of Time</p>
            <p class="middle"><a href="https://www.primevideo.com/dp/amzn1.dv.gti.77675b9c-b06b-4561-9c25-b2d6e70babe4?autoplay=1&ref_=atv_cf_strg_wb" target="_blank" class="button">Watch now</a></p>
            </div>
        <div class="clm">
            <img src="image/72.jpg" alt="" class="image" style="width: 100%;">
            <p class="text">The Walking Dead</p>
            <p class="middle"><a href="https://www.netflix.com/in/title/70177057?source=35" target="_blank" class="button">Watch now</a></p>
            </div>
        <div class="clm">
            <img src="image/42.jpg" alt="" class="image" style="width: 100%;">
            <p class="text">Invasion</p>
            <p class="middle"><a href="https://tv.apple.com/in/episode/last-day/umc.cmc.bmtv5n93jgkx5sa30ylzlubm?action=playSmartEpisode" target="_blank" class="button">Watch now</a></p>
            </div>
        <div class="clm">
            <img src="image/43.jpg" alt="" class="image" style="width: 100%;"> 
            <p class="text">Arcane</p>
            <p class="middle"><a href="https://www.netflix.com/in/title/81435684?source=35" target="_blank" class="button">Watch now</a></p>
            </div>
        <div class="clm">
            <img src="image/44.jpg" alt="" class="image" style="width: 100%;">
            <p class="text">Yellowjackets</p>
            <p class="middle"><a href="https://www.voot.com/shows/yellowjackets/264494?utm_source=google_web&utm_medium=watchaction" target="_blank" class="button">Watch now</a></p>
            </div>
        <div class="clm">
            <img src="image/45.jpg" alt="" class="image" style="width: 100%;">
            <p class="text">Hawkeye</p>
            <p class="middle"><a href="https://www.hotstar.com/in/tv/hawkeye/1260073683?utm_source=gwa" target="_blank" class="button">Watch now</a></p>
            </div>
        <div class="clm">
             <img src="image/73.jpg" alt="" class="image"style="width: 100%;">
             <p class="text">Emily in Paris</p>
             <p class="middle"><a href="https://www.netflix.com/in/title/81037371?source=35" target="_blank" class="button">Watch now</a></p>
            </div>
                <div class="clm">
                    <img src="image/74.jpg" alt="" class="image" style="width: 100%;">
                    <p class="text">Cobra Kai</p>
                    <p class="middle"><a href="https://www.netflix.com/in/title/81002370?source=35" target="_blank" class="button">Watch now</a></p>
                    </div>
                <div class="clm">
                    <img src="image/48.jpg" alt="" class="image" style="width: 100%;">
                    <p class="text">The Silent Sea</p>
                    <p class="middle"><a href="https://www.netflix.com/in/title/81098012?source=35" target="_blank" class="button">Watch now</a></p>
                    </div>
                <div class="clm">
                    <img src="image/49.jpg" alt="" class="image" style="width: 100%;">
                    <p class="text">Maid</p>
                    <p class="middle"><a href="https://www.netflix.com/in/title/81166770?source=35" target="_blank" class="button">Watch now</a></p>
                    </div>
                <div class="clm">
                    <img src="image/60.jpg" alt="" class="image" style="width: 100%;"> 
                    <p class="text">The Book of Boba Fett</p>
                    <p class="middle"><a href="https://www.hotstar.com/in/tv/the-book-of-boba-fett/1260076689?utm_source=gwa" target="_blank" class="button">Watch now</a></p>
                    </div>
                <div class="clm">
                    <img src="image/61.jpg" alt="" class="image" style="width: 100%;">
                    <p class="text">The Witcher</p>
                    <p class="middle"><a href="https://www.netflix.com/in/title/80189685?source=35" target="_blank" class="button">Watch now</a></p>
                    </div>
                <div class="clm">
                    <img src="image/62.jpg" alt="" class="image" style="width: 100%;">
                    <p class="text">Ozark</p>
                    <p class="middle"><a href="https://www.netflix.com/in/title/80117552?source=35" target="_blank" class="button">Watch now</a></p>
                    </div>
                <div class="clm">
                     <img src="image/63.jpg" alt="" class="image"style="width: 100%;">
                     <p class="text">Archive 81</p>
                     <p class="middle"><a href="https://www.netflix.com/in/title/80222802?source=35" target="_blank" class="button">Watch now</a></p>
                    </div>
                        <div class="clm">
                            <img src="image/77.jpg" alt="" class="image" style="width: 100%;">
                            <p class="text">Sherlock</p>
                            <p class="middle"><a href="https://www.netflix.com/ph/title/70202589" target="_blank" class="button">Watch now</a></p>
                            </div>
                        <div class="clm">
                            <img src="image/76.jpg" alt="" class="image" style="width: 100%;">
                            <p class="text">Homecoming</p>
                            <p class="middle"><a href="https://www.primevideo.com/dp/amzn1.dv.gti.aeb8f936-ea5c-dc09-7e3d-29c028feea9f?autoplay=1&ref_=atv_cf_strg_wb" target="_blank" class="button">Watch now</a></p>
                            </div>
                        <div class="clm">
                            <img src="image/67.jpg" alt="" class="image" style="width: 100%;">
                            <p class="text">The Expanse</p>
                            <p class="middle"><a href="https://www.primevideo.com/dp/amzn1.dv.gti.d7b4d26c-9f89-41ce-a124-a1a6f873bd30?autoplay=1&ref_=atv_cf_strg_wb" target="_blank"target="_blank" class="button">Watch now</a></p>
                            </div>
                        <div class="clm">
                            <img src="image/86.jpg" alt="" class="image" style="width: 100%;"> 
                            <p class="text">Elite</p>
                            <p class="middle"><a href="https://www.netflix.com/in/title/81289581?source=35" target="_blank" class="button">Watch now</a></p>
                            </div>
                        <div class="clm">
                            <img src="image/69.jpg" alt="" class="image" style="width: 100%;">
                            <p class="text">American Horror Story</p>
                            <p class="middle"><a href="https://www.hotstar.com/in/tv/american-horror-story/8459?utm_source=gwa" target="_blank" class="button">Watch now</a></p>
                            </div>
                        <div class="clm">
                            <img src="image/85.jpg" alt="" class="image" style="width: 100%;">
                            <p class="text">Vikings</p>
                            <p class="middle"><a href="https://www.netflix.com/in/title/70301870?source=35" target="_blank" class="button">Watch now</a></p>
                            </div>
                        <div class="clm">
                             <img src="image/71.jpg" alt="" class="image"style="width: 100%;">
                             <p class="text">Riverdale</p>
                             <p class="middle"><a href="https://www.netflix.com/in/title/80133311?source=35" target="_blank" class="button">Watch now</a></p>
                            </div>
    </div>
    </section>
    <section class="header2">
        <div class="navbar">
            <details>
                <summary class="intro">Movies</summary>
                <div class="flex container">
                    <div><a class="button" href="./alt2.html">POPULAR</a></div>
                    <div><a class="button" href="./alt2.html">HOLLYWOOD</a></div>
                    <div><a class="button" href="./alt2.html">BOLLYWOOD</a></div>
                    <div><a class="button" href="./alt2.html">HINDI DUBBED</a></div>
                    <div><a class="button" href="./alt2.html">TELUGU</a></div>
                    <div><a class="button" href="./alt2.html">LATEST</a></div>
                    <div><a class="button" href="./alt2.html">DUAL AUDIO</a></div>
               </div>
            </details>
         </div>
         <div class="navbar">
            <details>
                <summary class="intro">Web-series</summary>
                <div class="flex container">
                <div><a class="button" href="./alt3.html">ACTION</a></div>
                <div><a class="button" href="./alt3.html">ADVENTURE</a></div>
                <div><a class="button" href="./alt3.html">HORROR</a></div>
                <div><a class="button" href="./alt3.html">SCI-FI</a></div>
                <div><a class="button" href="./alt3.html">ROMANCE</a></div>
                <div><a class="button" href="./alt3.html">COMEDY</a></div>
                <div><a class="button" href="./alt3.html">MYSTERY</a></div>
                <div><a class="button" href="./alt3.html">FANTASY</a></div>
                </div>
             </details>  
         </div>
    </section>
    <section class ="box">
        <div class ="upcoming">
        <h3>Coming Soon To Theatres <i class="fab fa-angle-right"><h3>
        <div class="container">
          <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide"> <div class="movieslide">
    <img src="image/pp30.png" alt="" class="image" width = "100%" height = "450px">
    <p>The Batman<br>Action | MAR 8</p>
    </div>
  </div>
  <div class="swiper-slide"><div class="movieslide">
    <img src="image/ppp39.jpg" alt="" class="image" width = "100%" height = "450px">
    <p>Operation Fortune: Ruse de Guerre<br> Action | MAR 17</p>
    </div>
  </div>
                <div class="swiper-slide"><div class="movieslide">
    <img src="image/PP28.webp" alt="" class="image" width = "100%" height = "450px">
    <p>The Lost City<br>Action | MAR 25</p>
    </div>
  </div>
                <div class="swiper-slide"><div class="movieslide">
    <img src="image/pp27.jpg" alt="" class="image" width = "100%" height = "450px">
    <p>Morbius<br>Fantasy | APR 1</p>
    </div>
  </div>
  <div class="swiper-slide"><div class="movieslide">
    <img src="image/pp42.jpg" alt="" class="image" width = "100%" height = "450px">
    <p>The Contractor<br> Action | APR 1</p>
    </div>
  </div>
  
  <div class="swiper-slide"><div class="movieslide">
    <img src="image/pp41.jpg" alt="" class="image" width = "100%" height = "450px">
    <p>Ambulance<br> Thriller | APR 8</p>
    </div>
  </div>
                <div class="swiper-slide"> <div class="movieslide">
    <img src="image/pp26.jpg" alt="" class="image" width = "100%" height = "450px">
    <p>Fantastic Beasts: The Secrets of Dumbledore<br>Adventure | APR 15</p>
    </div>
  </div>
                <div class="swiper-slide"><div class="movieslide">
    <img src="image/p24.jpg" alt="" class="image" width = "100%" height = "450px">
    <p>The Northman<br> Adventure | APR 22</p>
    </div>
  </div>
               
                <div class="swiper-slide"><div class="movieslide">
    <img src="image/pp40.jpg" alt="" class="image" width = "100%" height = "450px">
    <p>The Bad Guys<br> Comedy | APR 22</p>
    </div>
  </div>
</div>
                              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination"></div>
              <!-- Add Arrows -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
</div>
    </section>
   
    <footer id="contact">
        <div class="footer-content">
            <h3>Movie site</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, beatae eos! Fugiat, inventore cum?</p>
            <ul class="socials">
              <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
              <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a></li>
              <li><a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
            </ul>
        </div> 
        <div class="footer-bottom">
          <p>copyright &copy; <script>document.write(new Date().getFullYear());</script> Moviesite. designed by <span>kirandeep</span></p>  
        </div> 
        </footer>
   
        <script>
          function myFunction() {
              var input, filter, para, parentDiv, a, i, txtValue;
              input = document.getElementById("myInput");
              if(input.value.length > 0) {
                console.log('condition check');
                document.getElementById("movies_list").style.display = "block";
              } else {
                document.getElementById("movies_list").style.display = "none";
              }
              filter = input.value.toUpperCase();
              para = document.getElementsByClassName("text");
              for (i = 0; i < para.length; i++) {
                  a = para[i];
                  txtValue = a.textContent || a.innerText;
                  console.log(txtValue);
                  parentDiv = a.parentNode;
                  if (txtValue.toUpperCase().indexOf(filter) > -1) {
                      parentDiv.style.display = "block";
                  } else {
                      parentDiv.style.display = "none";
                  }
              }
          }
        </script>
        
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
<script>
    var swiper = new Swiper('.swiper', {
      slidesPerView: 5,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
    </script>
<!-- 
<script>
var start = -1;
var end = 3;
showMovieSlides();


function showMovieSlides() {
  var i;
  var j;
  var slides = document.getElementsByClassName("movieslide");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  start++;
  end++;
  if (start > slides.length-1) {start = 0;end =4; }   
  if (end > slides.length-1) {end =0;start=6;} 
  if(end < start){
    for(var j=0;j<=end;j++){
        slides[j].style.display = "block";   
    }
    for(var j=start; j<slides.length;j++){
        slides[j].style.display = "block";  
    }
  }    
  else{
    for(var j=start;j<=end;j++){
        slides[j].style.display = "block";  
    }
  setTimeout(showMovieSlides, 3000);
}
</script> -->
 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
