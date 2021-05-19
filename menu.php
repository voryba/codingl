<?php
  session_start();
  $connect = mysqli_connect("localhost", "root", "", "clab_db")
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Menu - Feliciano food</title>

  <!-- CSS only -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
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

  <!-- as -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>

<body>

  <!-- HEADER -->
  <header class="header">
    <nav class="navbar navbar-light" id="navBar">
      <div class="container-header">
        <div class="header__inner">
          <div class="navbar-brand mb-0 h1"><a href="index.html" id="nav__logo" class="nav__logo">Feliciano</a></div>
          <div class="nav__menu">
            <ul class="nav__list">
              <li class="nav__item"><a href="index.html#about" id="navbar__link" class="navbar__link1 ">About</a></li>
              <li class="nav__item"><a href="index.html#services" id="navbar__link2" class="navbar__link1 ">Services</a></li>
              <li class="nav__item"><a href="#menu" id="navbar__link3" class="navbar__link1 ">Menu</a></li>
              <li class="nav__item"><a href="contact.php" id="navbar__link4" class="navbar__link1 ">Contact us</a></li>
            </ul>
          </div>

        </div>
      </div>
    </nav>
  </header>
  <!-- MAIN -->
  <main>

    <!-- Home -->
    <section class="section__back">
      <div class="container">
        <div class="row align-items-center row1">
          <div class="col-sm align-self-center main__data text-center">
            <h1 class="main__title">Feliciano food</h1>
            <h2 class="main__subtitle">Try the best and <br> healthy food.</h2>
            <a href="#menu" class="btn">View menu</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Menu-1-Salad -->
    <section class="section" id="menu">
      <div class="container-fluid">
        <span class="section-subtitle text-center">Menu</span>
        <h2 class="section-title text-center">Our Healthy & Signature Salad</h2>
        <div class="row">
          <div class="col-sm">
            <div class="container">
              <div class="row align-items-center menu__container">

                <?php
                  $query = "SELECT * FROM menu";
                  $result = mysqli_query($connect, $query);

                  while ($row = mysqli_fetch_array($result)) {
                    if($row['id'] < 4){
                ?>
                <div class="col-sm text-center">
                  <div class="menu__option">
                    <form action="menu.php?id=<?=$row['id'] ?>" method="get">
                      <img src="img/<?= $row["img"] ?>" alt="" class="menu__img">
                      <h3 class="menu__name"><?= $row["goodname"] ?></h3>
                      <span class="menu__detail"><?= $row["detail"] ?></span><br>
                      <span class="menu__name menu__detail">$<?= $row["price"] ?></span>
                      <a href="#" class="button menu__button"><img src="img/shopping-cart.svg" class="menu__button__img" alt=""></a>
                    </form>
                  </div>
                </div>
                <?php
                }
                  }

                  ?>


              </div>
            </div>
          </div>
        </div>
      </div>

      </div>
    </section>
    <!-- Menu-2-MainDishes -->
    <br>
    <section>
      <div class="container-fluid">
        <h2 class="section-title text-center">Main Dishes</h2>
        <div class="row">
          <div class="col-sm">
            <div class="container">
              <div class="row align-items-center menu__container">

                <?php
                  $query = "SELECT * FROM menu";
                  $result = mysqli_query($connect, $query);

                  while ($row = mysqli_fetch_array($result)) {
                    if($row['id'] > 3 && $row['id'] < 7){
                ?>
                <div class="col-sm text-center">
                  <div class="menu__option">
                    <form action="menu.php?id=<?=$row['id'] ?>" method="get">
                      <img src="img/<?= $row["img"] ?>" alt="" class="menu__img">
                      <h3 class="menu__name"><?= $row["goodname"] ?></h3>
                      <span class="menu__detail"><?= $row["detail"] ?></span><br>
                      <span class="menu__name menu__detail">$<?= $row["price"] ?></span>
                      <a href="#" class="button menu__button"><img src="img/shopping-cart.svg" class="menu__button__img" alt=""></a>
                    </form>
                  </div>
                </div>
                <?php
                }
                  }

                  ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- Menu-3-Soup -->
    <br>
    <section>
      <div class="container-fluid">
        <h2 class="section-title text-center">Soup</h2>
        <div class="row">
          <div class="col-sm">
            <div class="container">
              <div class="row align-items-center menu__container">

                <?php
                  $query = "SELECT * FROM menu";
                  $result = mysqli_query($connect, $query);

                  while ($row = mysqli_fetch_array($result)) {
                    if($row['id'] > 6 && $row['id'] < 10){
                ?>
                <div class="col-sm text-center">
                  <div class="menu__option">
                    <form action="menu.php?id=<?=$row['id'] ?>" method="get">
                      <img src="img/<?= $row["img"] ?>" alt="" class="menu__img">
                      <h3 class="menu__name"><?= $row["goodname"] ?></h3>
                      <span class="menu__detail"><?= $row["detail"] ?></span><br>
                      <span class="menu__name menu__detail">$<?= $row["price"] ?></span>
                      <a href="#" class="button menu__button"><img src="img/shopping-cart.svg" class="menu__button__img" alt=""></a>
                    </form>
                  </div>
                </div>
                <?php
                }
                  }

                  ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Menu-4-Deserts -->
    <br>
    <section>
      <div class="container-fluid">
        <h2 class="section-title text-center">Deserts</h2>
        <div class="row">
          <div class="col-sm">
            <div class="container">
              <div class="row align-items-center menu__container">

                <?php
                  $query = "SELECT * FROM menu";
                  $result = mysqli_query($connect, $query);

                  while ($row = mysqli_fetch_array($result)) {
                    if($row['id'] > 9 && $row['id'] < 13){
                ?>
                <div class="col-sm text-center">
                  <div class="menu__option">
                    <form action="menu.php?id=<?=$row['id'] ?>" method="get">
                      <img src="img/<?= $row["img"] ?>" alt="" class="menu__img">
                      <h3 class="menu__name"><?= $row["goodname"] ?></h3>
                      <span class="menu__detail"><?= $row["detail"] ?></span><br>
                      <span class="menu__name menu__detail">$<?= $row["price"] ?></span>
                      <a href="#" class="button menu__button"><img src="img/shopping-cart.svg" class="menu__button__img" alt=""></a>
                    </form>
                  </div>
                </div>
                <?php
                }
                  }

                  ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Menu-5-Drinks -->
    <br>
    <section>
      <div class="container-fluid">
        <h2 class="section-title text-center">Drinks</h2>
        <div class="row">
          <div class="col-sm">
            <div class="container">
              <div class="row align-items-center menu__container">

                <?php
                  $query = "SELECT * FROM menu";
                  $result = mysqli_query($connect, $query);

                  while ($row = mysqli_fetch_array($result)) {
                    if($row['id'] > 12 && $row['id'] < 16){
                ?>
                <div class="col-sm text-center">
                  <div class="menu__option">
                    <form action="menu.php?id=<?=$row['id'] ?>" method="get">
                      <img src="img/<?= $row["img"] ?>" alt="" class="menu__img">
                      <h3 class="menu__name"><?= $row["goodname"] ?></h3>
                      <span class="menu__detail"><?= $row["detail"] ?></span><br>
                      <span class="menu__name menu__detail">$<?= $row["price"] ?></span>
                      <a href="#" class="button menu__button"><img src="img/shopping-cart.svg" class="menu__button__img" alt=""></a>
                    </form>
                  </div>
                </div>
                <?php
                }
                  }

                  ?>
              </div>
            </div>
          </div>
        </div>
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
      <p class="footer__last">© 2021 voryba. Yerkhan Sabyrov</p>
    </div>
  </footer>

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
        $('#nav__logo').addClass('navbar__link');
      } else {
        $('#navBar').removeClass('scrolled');
        $('#navbar__link').removeClass('navbar__link');
        $('#navbar__link2').removeClass('navbar__link');
        $('#navbar__link3').removeClass('navbar__link');
        $('#navbar__link4').removeClass('navbar__link');
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
