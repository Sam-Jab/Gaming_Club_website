<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="">
  <meta name="description" content="">

  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css"><!-- Wow.js -->
  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <!-- stylesheets css -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <link rel="stylesheet" href="css/nivo-lightbox.css">
  <link rel="stylesheet" href="css/nivo_themes/default/default.css">

  <link rel="stylesheet" href="css/hover-min.css">
  <link rel="stylesheet" href="css/flexslider.css">
  <link href="css/styles.css?<?= filemtime("css/styles.css") ?>" rel="stylesheet" type="text/css" />

  <!-- Fonts -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Angkor&family=Lato:wght@100;300;400&family=Lora:ital,wght@0,400..700;1,400..700&family=Mohave:ital,wght@0,300..700;1,300..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Trade+Winds&family=Truculenta:opsz,wght@12..72,100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/minecraft-4" rel="stylesheet">
  <title>FST Gaming Club </title>
</head>

<body>

  <!-- home -->

  <section id="home" class="parallax-section">
    <div class="container-fluid">
      <div class="backgrounds-container">
        <img class="showing background" src="images/homeimage2.jpg" alt="">
        <img class="background" src="images/homeimage1.jpg" alt="">
        <img class="background" src="images/homeimage4.jpg" alt="">
        <img class="background" src="images/homeimage5.jpg" alt="">
        <img class="background" src="images/homeimage6.jpg" alt="">
        <img class="background" src="images/homeimage7.jpg" alt="">
        <img class="background" src="images/homeimage8.jpg" alt="">
        <img class="background" src="images/homeimage9.jpg" alt="">
      </div>
      <div class="login-box">
        <a href="loginscreen.php"><img id="login-icon" src="images/loginicon.png" alt=""></a>
      </div>
      <h1 id="home-title" class="wow fadeInUp" data-wow-delay="0.6s">FST GAMING CLUB</h1>
      <h5 id="home-text" class="wow fadeInUp" data-wow-delay="1s">At the FST Gaming Club, we believe that every game tells a story, and every player is the author of their destiny.</h5>
      <div class="buttons">
        <a id="getstarted" class="home-button wow fadeInUp btn btn-default hvr-bounce-to-top smoothScroll" data-wow-delay="1.3s">Get Started</a>
        <a id="discover" class="home-button wow fadeInUp btn btn-default hvr-bounce-to-top smoothScroll" data-wow-delay="1.3s" href="#navigation">Discover</a>
      </div>
    </div>
  </section>

  <!-- navbar -->

  <section id="navigation">

    <div id="navigation-bar" class="container-fluid">
      <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#homenavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="homenavbar" class="collapse navbar-collapse d-flex justify-content-center align-items-center">
          <ul class="navbar-nav mx-auto">
            <a class="navbar-brand" href="#home">FGC</a>
            <!-- <li class="nav-item">
              <a class="nav-link smoothScroll" href="#home">Home</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link smoothScroll" href="#features">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link smoothScroll" href="#games">Games</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tournaments">tournaments</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="loginscreen.php">Register</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <!-- Features -->

    <section id="features">
      <!-- <div class="navigation-background-box">
        <img class="navigation-background" src="images/navigationimage.jpg" alt="">
      </div> -->
      <div class="container-fluid">
        <div class="row">
          <div id="features-col-box" class="col-lg-6">
            <div class="wow-fadeInUp features-col col-lg-12 col-md-12" data-wow-delay="1s">
              <div class="features-icon">
                <!-- <img src="images/communities.png" alt=""> -->
              </div>
              <h4 class="features-title">DIVERSE GAMING COMMUNITY</h4>
              <p class="features-text">Whether you're into first-person shooters, role-playing games, strategy games, or anything in between, you'll find like-minded gamers who share your interests here.</p>
            </div>
            <div class="wow fadeInUp features-col col-lg-12 col-md-12" data-wow-delay="1.1s">
              <div class="features-icon">
                <!-- <img src="images/event.png" alt=""> -->
              </div>
              <h4 class="features-title">REGULAR tournaments AND TOURNAMENTS</h4>
              <p class="features-text">From casual gaming nights to competitive tournaments, we host a variety of tournaments to cater to different playstyles and preferences.</p>
            </div>
            <div class="wow fadeInUp features-col col-lg-12 col-md-12" data-wow-delay="1.2s">
              <div class="features-icon">
                <!-- <img src="images/news.png" alt=""> -->
              </div>
              <h4 class="features-title">ENGAGING DISCUSSIONS AND CONTENT</h4>
              <p class="features-text">Stay updated on the latest gaming news, trends, and releases through our curated content and community discussions.</p>
            </div>
            <div class="wow fadeInUp features-col col-lg-12 col-md-12" data-wow-delay="1.3s">
              <div class="features-icon">
                <!-- <img src="images/news.png" alt=""> -->
              </div>
              <h4 class="features-title">EXCLUSIVE MEMBER RESSOURCES AND WORKSHOPS</h4>
              <p class="features-text">Members of our gaming club have access to exclusive resources and workshops aimed at enhancing their gaming skills and knowledge.
                From strategy guides and tutorials to guest speaker sessions and workshops conducted by industry professionals, we provide valuable opportunities for members to level up their gaming expertise.</p>
            </div>
            <div class="wow fadeInUp features-col col-lg-12 col-md-12" data-wow-delay="1.5s">
              <div class="features-icon">
                <!-- <img src="images/news.png" alt=""> -->
              </div>
              <h4 class="features-title">GAMING LOUNGE AND SOCIAL HUB</h4>
              <p class="features-text">Our gaming club offers a dedicated gaming lounge and social hub where members can gather, relax, and immerse themselves in the gaming experience. </p>
            </div>
          </div>
          <div class="col-lg-6">
            <div id="features-image-box" class="row">
              <div class="left col-lg-6">
                <img id="featureimage1" class="wow fadeInUp features-image" data-wow-delay="1s" src="images/featuresimage1.jpeg" alt="">
                <img id="featureimage2" class="wow fadeInUp features-image" data-wow-delay="1.1s" src="images/featuresimage2.jpeg" alt="">
                <img id="featureimage5" class="wow fadeInUp features-image" data-wow-delay="1.1s" src="images/featuresimage5.jpeg" alt="">
                <img id="featureimage6" class="wow fadeInUp features-image" data-wow-delay="1.1s" src="images/featuresimage6.jpeg" alt="">

              </div>
              <div class="right col-lg-6">
                <img id="featureimage8" class="wow fadeInUp features-image" data-wow-delay="1.2s" src="images/featuresimage8.jpeg" alt="">
                <img id="featureimage4" class="wow fadeInUp features-image" data-wow-delay="1.3s" src="images/featuresimage4.jpeg" alt="">
                <img id="featureimage7" class="wow fadeInUp features-image" data-wow-delay="1.1s" src="images/featuresimage7.jpeg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="video" class="parallax-section custom-background">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="video-items col-md-offset-2 col-md-8 col-sm-12">
            <a class="popup-youtube" href="https://www.youtube.com/watch?v=oD3pxbG9YYI"><i class="fa fa-play"></i></a>
            <h2 class="wow fadeInUp" data-wow-delay="0.5s">Watch the video</h2>
            <p class="wow fadeInUp" data-wow-delay="0.8s">Laughter and high-fives punctuate the air, as players bask in the satisfaction of a
              memorable gaming experience. A promise lingers—more adventures await in this captivating journey !! </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Games -->

    <section id="games">
      <div class="container-fluid">
        <h1 class="wow fadeInUp" data-wow-delay="0.5s">Games we play</h1>
        <div class="games-container row">
          <?php

          $servername = "localhost";
          $username = "root";
          $password = "samirT080317-";
          $dbname = "f_g_club";


          $conn = new mysqli($servername, $username, $password, $dbname);


          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }


          $sql = "SELECT title, release_date, description, genre, image FROM games";
          $result = $conn->query($sql);


          if ($result->num_rows > 0) {

            $delay = 0.1;
            while ($row = $result->fetch_assoc()) {
              echo '<div class="card col-lg-3 wow fadeInUp" data-wow-delay="' . $delay . 's">';
              echo '<img class="card-image" src="' . $row["image"] . '" alt="' . $row["title"] . '">';
              echo '<div class="card-content">';
              echo '<h2>' . $row["title"] . '</h2>';
              echo '<p class="genre-text">Genre: ' . $row["genre"] . '</p>';
              echo '<p class="release-text">Release Date: ' . $row["release_date"] . '</p>';
              echo '<p>' . $row["description"] . '</p>';
              echo '</div>';
              echo '</div>';
              $delay += 0.1;
            }
          } else {
            echo "0 results";
          }
          ?>
        </div>
      </div>
    </section>



    <!-- Tournaments -->

    <section id="tournaments">
      <div class="overlay">
        <div class="container-fluid">
          <h1 class="wow fadeInUp" data-wow-delay="0.5s">Upcoming Tournaments</h1>
          <div class="row">
            <?php
            // SQL query to retrieve event information
            $sql = "SELECT title, DATE_FORMAT(date, '%e %b %Y') AS formatted_date, TIME_FORMAT(time, '%h:%i %p') AS formatted_time, description FROM tournaments WHERE date>CURDATE()";
            $result = $conn->query($sql);

            // Check if there are any results
            if ($result->num_rows > 0) {
              // Output data of each row
              $delay = 0.1;
              while ($row = $result->fetch_assoc()) {
                echo '<div class="wow fadeInUp card col-lg-6 col-md-12" data-wow-delay="' . $delay . 's">';
                echo '<p class="event-title"><strong>' . $row["title"] . '</strong> - ' . $row["formatted_date"] . ' - ' . $row["formatted_time"] . '</p>';
                echo '<p class="event-text">' . $row["description"] . '</p>';
                echo '</div>';
                $delay += 0.1;
              }
            } else {
              echo "No upcoming Tournaments";
            }
            ?>
          </div>
          <h1 class="wow fadeInUp" data-wow-delay="0.5s">Past Tournaments</h1>
          <div class="row">
            <?php
            // SQL query to retrieve event information
            $sql = "SELECT title, DATE_FORMAT(date, '%e %b %Y') AS formatted_date, TIME_FORMAT(time, '%h:%i %p') AS formatted_time, description FROM tournaments WHERE date<CURDATE()";
            $result = $conn->query($sql);

            // Check if there are any results
            if ($result->num_rows > 0) {
              // Output data of each row
              $delay = 0.1;
              while ($row = $result->fetch_assoc()) {
                echo '<div class="wow fadeInUp card col-lg-6 col-md-12" data-wow-delay="' . $delay . 's">';
                echo '<p class="event-title"><strong>' . $row["title"] . '</strong> - ' . $row["formatted_date"] . ' - ' . $row["formatted_time"] . '</p>';
                echo '<p class="event-text">' . $row["description"] . '</p>';
                echo '</div>';
                $delay += 0.1;
              }
            } else {
              echo "No upcoming Tournaments";
            }

            ?>
          </div>
        </div>
      </div>
    </section>


    <!-- Gallery -->

    <section id="gallery">
      <div class="overlay">
        <div class="container-fluid">
          <h1>Gallery</h1>
          <div class="row gallery-row">
            <?php
            $sql = "SELECT caption, description, image FROM gallery";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              $delay = 0.1;
              while ($row = $result->fetch_assoc()) {
                echo '<div class="img-box col-lg-4 wow fadeInUp" data-wow-delay="' . $delay . 's">';
                echo '<img src="' . $row["image"] . '" alt="" />';
                echo '<div class="transparent-box">';
                echo '<div class="caption">';
                echo '<p>' . $row["caption"] . '</p>';
                echo '<p class="opacity-low">' . $row["description"] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                $delay += 0.1;
              }
            } else {
              echo "0 results";
            }
            $conn->close();
            ?>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="row">
        <div class="about-col col-lg-4">
          <h4 class="footer-title">About Us</h4>
          <p>Unique shelter to enjoy gaming in calm and modern atmosphere based in Tanger, Morocco.
            We aim to provide a safe haven for those who game in their spare time whether it is casual or competitive.</p>
          <form action="submit">
            <input class="email-box" type="text" placeholder="Email Address">
          </form>
        </div>
        <div class="explore-col col-lg-3">
          <h4 class="footer-title">Explore</h4>
          <ul>
            <li>Features</li>
            <li>Games</li>
            <li>tournaments</li>
            <li>Gallery</li>
          </ul>
        </div>
        <div class="games-col col-lg-2">
          <h4 class="footer-title">Our popular games</h4>
          <ul>
            <li>Ea Sports FC 24</li>
            <li>PUBG</li>
            <li>Minecraft</li>
            <li>NBA 2K24</li>
          </ul>
        </div>
        <div class="info-col col-lg-2">
          <h5>Phone</h5>
          <p>+212645091209</p>
          <h5>Address</h5>
          <p style="text-transform: uppercase;">Faculty of sciences & technologies, Boukhalef, Tanger</p>
          <h5>Email Adress</h5>
          <p>sendme@gmail.com</p>
        </div>
      </div>
    </footer>
  </section>
  <!-- javscript js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="js/jquery.js"></script>
  <script src="js/main.js?<?= filemtime("js/main.js") ?>"></script>
  <script src="js/highlight.js?<?= filemtime("js/highlight.js") ?>"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.parallax.js"></script>
  <script src="js/smoothscroll.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>