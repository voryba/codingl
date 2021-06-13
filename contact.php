<?php
  session_start();
  if (isset($_SESSION['user'])) {
    $name = $_SESSION['user']['full_name'];
  }
  else {
    $name = "Log In";
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <title>Feliciano food</title>
</head>
<header class="header">
  <nav class="navbar navbar-light" id="navBar">
    <div class="container-header">
      <div class="header__inner">
        <span class="navbar-brand mb-0 h1"><a href="index.php" id="nav__logo" class="nav__logo">Feliciano</a></span>
        <div class="nav__menu">
          <ul class="nav__list">
            <li class="nav__item"><a href="#about" id="navbar__link" class="navbar__link1 ">About</a></li>
            <li class="nav__item"><a href="#services" id="navbar__link2" class="navbar__link1 ">Services</a></li>
            <li class="nav__item"><a href="menu.php#menu" id="navbar__link3" class="navbar__link1 ">Menu</a></li>
            <li class="nav__item"><a href="contact.php" id="navbar__link4" class="navbar__link1 ">Contact us</a></li>
            <li class="nav__item">
              <?php
                  if (isset($_SESSION['user'])){
                    echo '<img src="';
                    echo $_SESSION['user']['avatar'];
                    echo '" alt="" style="width: 30px; border: 0.5px solid grey; border-radius:5px;">';
                  };
               ?>
              <a href="login.php" id="navbar__link5" class="navbar__link1 ">&nbsp;&nbsp;<?php echo $name;?></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>
<body>
  <!-- MAIN -->
  <main>

    <!-- Home -->
    <section class="section__back">
      <div class="container">
        <div class="row align-items-center row1">
          <div class="col-sm align-self-center main__data text-center">
            <h1 class="main__title">Feliciano food</h1>
            <h2 class="main__subtitle">Try the best and <br> healthy food.</h2>
            <a href="#contact" class="btn">Contact Us</a>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="contact">
      <div class="container">
        <div class="section-title"><h2>Contact</h2></div>
        <div class="contact_wrap">
          <?php

            $Msg = "";
            if(isset($_GET['error'])){
              $Msg = " Please Fill in the Blanks ";
                echo '<div class="alert alert-danger">'.$Msg.'</div>';
            }
            if(isset($_GET['success'])){
              $Msg = " Your Message Has Been Sent ";
                echo '<div class="alert alert-success">'.$Msg.'</div>';
            }

          ?>
          <form action="process.php" method="post">
          <div class="contact_row">
            <div class="first_name">
              <form  action="contacts.php" method="post">
              <label for="fname" class="section-subtitle">First name</label>
              <br>
              <input type="text" class="form-control" id="fname" name="fname">
            </div>
            <div class="second_name">
              <form  action="contacts.php" method="post">
              <label for="sname" class="section-subtitle">Second name</label>
              <br>
              <input type="text" class="form-control" id="sname" name="sname">
            </div>
          </div>

          <div class="mail">
            <form  action="contacts.php" method="post">
            <label for="fmail" class="section-subtitle">Email</label>
            <br>
            <input type="email" class="form-control email" id="fmail" name="Email">
          </div>

          <div class="textarea">
            <form  action="contacts.php" method="post">
            <label for="messsage" class="section-subtitle">Message</label>
            <br>
            <textarea name="msg" id="message" cols="30" rows="10" class="form-control email" style="height: 169px;"></textarea>
          </div>

          <div class="send_btn">
            <input type="submit" class="btn2" value="Send Message" name="btn-send">
          </div>
        </form>
        </div>
      </div>
    </section>

    <!-- MAP -->
    <section class="section">
      <div class="container-fluid">
        <!--Google map-->
        <div id="map-container-google-2" class="z-depth-1-half map-container">
          <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Nur-Sultan,%20EXPO+(Feliciano%20Food)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <!--Google Maps-->
      </div>
    </section>
  </main>

  <!-- FOOTER -->
  <footer class="footer section">
    <div class="container">
      <div class="row menu__container">
        <div class="col-sm text-left">
          <!--  -->
          <div class="footer__section">
            <a href="#" class="footer__logo">Feliciano Food</a>
            <span class="footer__description">Restaurant</span>
            <div>
              <a href="#" class="footer__social"><img src="img/instagram.png" alt=""></a>
              <a href="#" class="footer__social"><img src="img/facebook.png" alt=""></a>
              <a href="#" class="footer__social"><img src="img/twitter.png" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-sm text-left">
          <!--  -->
          <h3 class="footer__title">Services</h3>
          <ul>
            <li><a href="#" class="footer__link">Delivery</a></li>
            <li><a href="#" class="footer__link">Pricing</a></li>
            <li><a href="#" class="footer__link">Fast Food</a></li>
            <li><a href="#" class="footer__link">Reserve your spot</a></li>
          </ul>
        </div>
        <div class="col-sm text-left">
          <!--  -->
          <h3 class="footer__title">Information</h3>
          <ul>
            <li><a href="#" class="footer__link">Event</a></li>
            <li><a href="#" class="footer__link">Contact us</a></li>
            <li><a href="#" class="footer__link">Privacy policy</a></li>
            <li><a href="#" class="footer__link">Terms of services</a></li>
          </ul>
        </div>
        <div class="col-sm text-left">
          <!--  -->
          <h3 class="footer__title">Address</h3>
          <ul>
            <li><a href="#" class="footer__link">Nur-Sultan</a></li>
            <li><a href="#" class="footer__link">Kazakhstan, 010000</a></li>
            <li><a href="#" class="footer__link">+7 (7172)645-710</a></li>
            <li><a href="#" class="footer__link">info@astanait.edu.kz</a></li>
          </ul>
        </div>
      </div>
      <p class="footer__last">© 2021 Yernur & Yerkhan</p>
    </div>
  </footer>
  <script src="https://unpkg.com/scrollreveal"></script>
  <!-- JS, jQuery -->
  <script src="https://unpkg.com/scrollreveal"></script>
  <script>
    // $( window ).scroll(function()
    console.log("ASKDLMASKD");
    $(window).scroll(function() {
      if ($(window).scrollTop() > 22) {
        console.log("RAB");
        $('#navBar').addClass('scrolled');
        $('#navbar__link').addClass('navbar__link');
        $('#navbar__link2').addClass('navbar__link');
        $('#navbar__link3').addClass('navbar__link');
        $('#navbar__link4').addClass('navbar__link');
        $('#navbar__link5').addClass('navbar__link');
        $('#nav__logo').addClass('navbar__link');
      } else {
        $('#navBar').removeClass('scrolled');
        $('#navbar__link').removeClass('navbar__link');
        $('#navbar__link2').removeClass('navbar__link');
        $('#navbar__link3').removeClass('navbar__link');
        $('#navbar__link4').removeClass('navbar__link');
        $('#navbar__link5').removeClass('navbar__link');
        $('#nav__logo').removeClass('navbar__link');
      }
    });

    const sr = ScrollReveal({
      origin: 'top',
      distance: '30px',
      duration: 2000,
      reset: true
    });

    sr.reveal(`.main__data, .main__img, .main2, .btn, .btn2, .menu__option, h2, span`, {
      interval: 5
    })
  </script>
</body>

</html>
