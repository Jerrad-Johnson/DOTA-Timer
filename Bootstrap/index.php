<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Resume - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/styles.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Clarence Taylor</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#timer">timer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#instructions">Instructions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#news">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#credits">Credits</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0">About
          <span class="text-primary">DOTA Timer</span>
        </h1>
        <div class="subheading mb-5">Improve Your Game
        </div>
        <p class="lead mb-5">Welcome! The purpose of this website is to provide you with a valuable aid that will give you an advantage in the immensely popular computer game "DOTA 2." We'll achieve this by teaching you how to use our timer, which is a very simple device. Just press "start" at the right time, and listen for the alerts that will inform you when to take action.</p>

        <p class="lead mb-5">There's an instruction page that will teach you how to use the timer and explain its value. If you're very tech savvy, you can jump to the timer page. If you've been playing DOTA for very long, the timer's purpose should be very obvious: it will remind you to check runes, kill Roshan, and so on.</p>

        <p class="lead mb-5">If you browse the rest of this website, you'll see that I also offer miniature news updates which help to keep you informed about what's going on in the DOTA world. And if you love the timer and you're feeling generous, or if you have any comments or requests to send my way, please see the contact page.</p>
        <!--<div class="social-icons">
          <a href="#">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="#">
            <i class="fab fa-github"></i>
          </a>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>-->
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="timer">
      <div class="w-100">
        <h2 class="mb-5">Timer</h2>
          <img src="./images/Timer-Placeholder.jpg">

      </div>

    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="instructions">
      <div class="w-100">
          <h2 class="mb-5">Instructions</h2>
          <p class="mb-0">If you find these instructions difficult to understand, please go to the contact page and tell me which parts I need to rewrite. I hope you find these instructions useful, and that this website is able to improve your gameplay and your enjoyment!</p>
            <br />
          <p class="mb-0">Steps:
          <ul>
              <li>Go to the timer page</li>
              <li>Press Start</li>
          </ul>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="news">
      <div class="w-100">
        <h2 class="mb-5">News</h2>

        <div class="subheading mb-3">Only the most important events!</div>

        <?php include 'php/news.php'?>

      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="contact">
      <div class="w-100">
        <h2 class="mb-5">Contact</h2>
        <p class="mb-0">To report bugs, make feature requests, or express your appreciation, please contact or connect with me at:</p>

        <ul class="contact">
          <li><a href="mailto:j_johnson21@mail.fhsu.edu">E-mail</a></li>
          <li><a href="https://www.linkedin.com/in/jerrad-johnson-7b84a1190/">LinkedIn</a></li>
          <li><a href="https://www.facebook.com/profile.php?id=100008794832926">Facebook</a></li>
        </ul>
        <p class="mb-0">If you enjoyed my timer, please consider donating your Baby Roshans or other in-game items. Link to my <a href="https://steamcommunity.com/profiles/76561198010854512/">Steam Profile</a>. </p>
      </div>
    </section>

    <hr class="m-0">

    <section class="p-3 p-lg-5 d-flex align-items-center" id="credits">
      <div class="w-100">
        <h2 class="mb-5">Credits</h2>
        <ul class="fa-ul mb-0">
          <li>
            DOTA icon made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/"             title="Flaticon">www.flaticon.com</a></div>
          </li>
        </ul>
      </div>
    </section>

  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/resume.min.js"></script>

</body>

</html>
