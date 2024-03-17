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

  <link href='https://fonts.googleapis.com/css?family=Fjalla+One&family=Angkor&&family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
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
    <div class="navigation-background-box">
      <img class="navigation-background" src="images/navigationimage.jpg" alt="">
    </div>
    <div id="navigation-bar" class="container-fluid">
      <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#homenavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="homenavbar" class="collapse navbar-collapse d-flex justify-content-center align-items-center">
          <ul class="navbar-nav mx-auto">
            <a class="navbar-brand" href="#home">FGC</a>
            <li class="nav-item">
              <a class="nav-link smoothScroll" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link smoothScroll" href="#features">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link smoothScroll" href="#games">Games</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#events">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Register</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <!-- Features -->

    <section id="features">
      <div class="container-fluid">
        <div class="features-row row">
          <div class="features-col col-lg-4 col-md-12">
            <div class="features-icon">
              <img src="images/communities.png" alt="">
            </div>
            <h4 class="features-title">Diverse Gaming Community</h4>
            <p class="features-text">Whether you're into first-person shooters, role-playing games, strategy games, or anything in between, you'll find like-minded gamers who share your interests here.</p>
          </div>
          <div class="features-col col-lg-4 col-md-12">
            <div class="features-icon">
              <img src="images/event.png" alt="">
            </div>
            <h4 class="features-title">Regular Events and Tournaments</h4>
            <p class="features-text">From casual gaming nights to competitive tournaments, we host a variety of events to cater to different playstyles and preferences.</p>
          </div>
          <div class="features-col col-lg-4 col-md-12">
            <div class="features-icon">
              <img src="images/news.png" alt="">
            </div>
            <h4 class="features-title">Engaging Discussions and Content</h4>
            <p class="features-text">Stay updated on the latest gaming news, trends, and releases through our curated content and community discussions.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Games -->

    <section id="games">
      <div class="container-fluid">

      </div>
    </section>

    <!-- Events -->

    <section id="events">
      <div class="container-fluid">

      </div>
    </section>

    <!-- Gallery -->

    <section id="gallery">
      <div class="container-fluid">

      </div>
    </section>
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