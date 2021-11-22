<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>%title%</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Meterial Icon CSS -->
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css">
    <!-- Material CSS -->
    <link rel="stylesheet" href="assets/css/material.min.css">
    <!-- Ripples CSS -->
    <link rel="stylesheet" href="assets/css/ripples.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Slicknav CSS -->
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
 

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="assets/css/colors/indigo.css" media="screen" />

  </head>
  <body>

    <!-- Header Start -->
    <header id="header">
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar nav-bg">
        <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="sr-only">Toggle navigation</span>
              <span class="mdi mdi-menu"></span>
              <span class="mdi mdi-menu"></span>
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                <li class="nav-item %active_navbar_index%">
                    <a class="nav-link" href="index.php">
                        Главная
                    </a>
                </li>
                <li class="nav-item %active_navbar_helpers%">
                    <a class="nav-link" href="index.php?route=helpers">
                        Предложения помощи
                    </a>
                </li>
                <li class="nav-item %active_navbar_needs%">
                    <a class="nav-link" href="index.php?route=needs">
                        Нужна помощь
                    </a>
                </li>
                <li class="nav-item %active_navbar_orgs%">
                    <a class="nav-link" href="index.php?route=organizations">
                        Организации
                    </a>
                </li>
            </ul>
          </div>
        </div>
        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li>
            <a class="active" href="index.php">
                Главная
            </a>
          </li>
          <li>
            <a href="index.php?route=helpers">
                Предложения помощи
            </a>
          </li>
          <li>
            <a href="index.php?route=needs">
                Нужна помощь
            </a>
          </li>
          <li>
            <a href="index.php?route=organizations">
                Организации
            </a>
          </li>

        </ul>
        <!-- Mobile Menu End -->
      </nav>
    </header>
    <!-- Header End -->

    <!-- Call to action Section -->
    <section class="call-to-action-section">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-12 text-center wow animated fadeInLeft" data-wow-delay=".2s">
              <a class="" href="index.php"><img src="img/logo.png" alt=""></a>
          </div>
        </div>
      </div>
    </section>
    <!-- Call to action Section End -->

    %content%

    <!--Footer-->
    <footer class="page-footer center-on-small-only  pt-0 footer-widget-container">
      <!--Footer Links-->
      <div class="container pt-5 mb-5">
        <div class="row">
          <!--First column-->
          <div class="col-md-12 col-lg-4 col-xl-4 footer-contact-widget">
              <h3 class="footer-title">О проекте</h3>
              <p>Веб-сервис, где каждый житель Урая сможет разместить информацию о той помощи, которую он может оказать (как пример: дарение вещей, оказание услуг по доставке еды, медикаментов для одиноких и так далее). Также необходимо предусмотреть возможность разместить контактную информацию об объединениях волонтеров и добровольцев.</p>
          </div>
          <!--/.First column-->

          <!--Third column-->
          <div class="col-md-12 col-lg-4 col-xl-4 link-widget">
            <h3 class="footer-title">Быстрый переход</h3>
            <ul>
              <li><a href="?route=moder">Модерация</a></li>
              <li><a href="?route=helpers">Предложения</a></li>
              <li><a href="?route=needs">Запросы</a></li>
              <li><a href="?route=addHelpers">Добавить предложение</a></li>
              <li><a href="?route=addNeeds">Добавить запрос</a></li>
              <li><a href="?route=organizations">Организации</a></li>
              <li><a href="?route=addOrganizations">Добавить организацию</a></li>
            </ul>
          </div>
          <!--/.Third column-->

          <!--Fourth column-->
          <div class="col-md-12 col-lg-4 col-xl-4 footer-contact">
              <h3 class="footer-title">Партнёры</h3>
              <div class="widget widget-gallery">
                <ul class="magnific-gallery">
                  <li><a href="#"><img src="img/orgs/1.jpg" alt=""></a></li>
                  <li><a href="#"><img src="img/orgs/2.jpg" alt=""></a></li>
                  <li><a href="#"><img src="img/orgs/3.jpg" alt=""></a></li>
                  <li><a href="#"><img src="img/orgs/4.jpg" alt=""></a></li>
                  <li><a href="#"><img src="img/orgs/5.jpg" alt=""></a></li>
                  <li><a href="#"><img src="img/orgs/6.jpg" alt=""></a></li>
                </ul>
              </div>
          </div>
          <!--/.Fourth column-->

        </div>
      </div>
      <!--/.Footer Links-->

      <!-- Copyright-->
      <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; 2021 МБУ ДО "ЦМДО" <i class="mdi mdi-heart"></i> by <a href="http://vk.com/zorgo">ZORGO</a></p>
                </div>
            </div>
          </div>
      </div>
      <!--/.Copyright -->

    </footer>
    <!--/.Footer-->


    <!-- Back To Top -->
    <a href="#" class="back-to-top">
      <div class="ripple-container"></div>
      <i class="mdi mdi-arrow-up">
      </i>
    </a>

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- Optional JavaScript -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
 
    <script src="assets/js/jquery.mixitup.min.js"></script>
    <script src="assets/js/jquery.inview.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/scroll-top.js"></script>
    <script src="assets/js/smoothscroll.js"></script>
    <script src="assets/js/material.min.js"></script>
    <script src="assets/js/ripples.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.vide.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/main.js"></script>

  </body>
</html>
