<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"
    />

    <title>SoloSmartcity</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="{{asset("web/vendor/bootstrap/css/bootstrap.min.css")}}">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin=""/>
    <!-- <link rel="stylesheet" href="assets/css/fontawesome.css" /> -->
    <link rel="stylesheet" href="{{asset("web/assets/css/fontawesome.css")}}">
    <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->
    <link rel="stylesheet" href="{{asset("web/assets/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("web/assets/css/owl.css")}}">
    <link rel="stylesheet" href="{{asset("web/assets/css/animate.css")}}">
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <!-- <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" /> -->
    <link rel="stylesheet" href="{{asset("web/assets/css/swiper-bundle.min.css")}}">
    <!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
  </head>

  <body>
    <!-- ***** Preloader Start ***** -->
    <!-- <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div> -->
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <!-- ***** Logo Start ***** -->
              <a href="index.html" class="logo">
                <h1>SoloSmartcity</h1>
              </a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li><a href="index.html" class="active">Beranda</a></li>
                <li><a href="tentang.html">Tentang</a></li>
                <li><a href="dimensi-utama.html">Dimensi</a></li>
                <li><a href="solo-event.html">Solo Events</a></li>
                <li><a href="experience.html">Digital Experience</a></li>
                <li>
                  <a href="#"><i class="fa fa-search"></i> Search</a>
                </li>
              </ul>
              <a class="menu-trigger">
                <span>Menu</span>
              </a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <div class="main-banner">
      <div class="owl-carousel owl-banner">
        <div class="item item-1">
          <div class="header-text">
            <span class="category">Toronto, <em>Canada</em></span>
            <h2>Hurry!<br />Get the Best Villa for you</h2>
          </div>
        </div>
        <div class="item item-2">
          <div class="header-text">
            <span class="category">Melbourne, <em>Australia</em></span>
            <h2>Be Quick!<br />Get the best villa in town</h2>
          </div>
        </div>
        <div class="item item-3">
          <div class="header-text">
            <span class="category">Miami, <em>South Florida</em></span>
            <h2>Act Now!<br />Get the highest level</h2>
          </div>
        </div>
      </div>
    </div>

    <!-- 6 dimensi -->
    <div class="dimensi-smart">
      <h3>Dimensi Smartcity</h3><br><br>
      <div class="smart-card">
        <div class="smart_link">
          <div class="konten">
            <img src="{{asset("web/assets/images/governance.jpg")}}" />
            <h1>Smart Governance</h1>
          </div>
        </div>
        <div class="smart_link">
          <div class="konten">
            <img src="{{asset("web/assets/images/branding.jpg")}}" />
            <h1>Smart Branding</h1>
          </div>
        </div>
        <div class="smart_link">
          <div class="konten">
            <img src="{{asset("web/assets/images/economy.jpg")}}" />
            <h1>Smart Economy</h1>
          </div>
        </div>
        <div class="smart_link">
          <div class="konten">
            <img src="{{asset("web/assets/images/living.jpg")}}" />
            <h1>Smart Living</h1>
          </div>
        </div>
        <div class="smart_link">
          <div class="konten">
            <img src="{{asset("web/assets/images/environtment.jpg")}}" />
            <h1>Smart Environment</h1>
          </div>
        </div>
        <div class="smart_link">
          <div class="konten">
            <img src="{{asset("web/assets/images/society.jpg")}}" />
            <h1>Smart Society</h1>
          </div>
        </div>
      </div>
    </div>

    <!-- end 6 dimensi -->

    <div class="video section">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 offset-lg-4">
            <div class="section-heading text-center"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="video-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div class="video-frame">
              <a href="https://youtube.com" target="_blank">
                <img
                  src="{{asset("web/assets/images/video-frame.jpg")}}"
                  alt=""
                  href="https://youtube.com"
                />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- slider -->
    <div class="card__container swiper">
      <div class="card__content">
        <div class="swiper-wrapper">
          <article class="card__article swiper-slide">
            <a href="https://surakarta.go.id/">
              <div class="card__data">
                <img
                  src="{{asset("web/assets/images/logo-ska.jpg")}}"
                  alt="image"
                  class="card__img"
                />
                <h3 class="card__name">Web Surakarta</h3>
              </a>
              </div>
          </article>
          <article class="card__article swiper-slide">
            <a href="https://surakarta.go.id/">
              <div class="card__data">
                <img
                  src="{{asset("web/assets/images/logo-ska.jpg")}}"
                  alt="image"
                  class="card__img"
                />
                <h3 class="card__name">Web Surakarta</h3>
              </a>
              </div>
          </article>
          <article class="card__article swiper-slide">
            <a href="https://surakarta.go.id/">
              <div class="card__data">
                <img
                  src="{{asset("web/assets/images/logo-ska.jpg")}}"
                  alt="image"
                  class="card__img"
                />
                <h3 class="card__name">Web Surakarta</h3>
              </a>
              </div>
          </article>
          <article class="card__article swiper-slide">
            <a href="https://surakarta.go.id/">
              <div class="card__data">
                <img
                  src="{{asset("web/assets/images/logo-ska.jpg")}}"
                  alt="image"
                  class="card__img"
                />
                <h3 class="card__name">Web Surakarta</h3>
              </a>
              </div>
          </article>
          <article class="card__article swiper-slide">
            <a href="https://surakarta.go.id/">
              <div class="card__data">
                <img
                  src="{{asset("web/assets/images/logo-ska.jpg")}}"
                  alt="image"
                  class="card__img"
                />
                <h3 class="card__name">Web Surakarta</h3>
              </a>
              </div>
          </article>
          <article class="card__article swiper-slide">
            <a href="https://surakarta.go.id/">
              <div class="card__data">
                <img
                  src="{{asset("web/assets/images/logo-ska.jpg")}}"
                  alt="image"
                  class="card__img"
                />
                <h3 class="card__name">Web Surakarta</h3>
              </a>
              </div>
          </article>
          <article class="card__article swiper-slide">
            <a href="https://surakarta.go.id/">
              <div class="card__data">
                <img
                  src="{{asset("web/assets/images/logo-ska.jpg")}}"
                  alt="image"
                  class="card__img"
                />
                <h3 class="card__name">Web Surakarta</h3>
              </a>
              </div>
          </article>
          <article class="card__article swiper-slide">
            <a href="https://surakarta.go.id/">
              <div class="card__data">
                <img
                  src="{{asset("web/assets/images/logo-ska.jpg")}}"
                  alt="image"
                  class="card__img"
                />
                <h3 class="card__name">Web Surakarta</h3>
              </a>
              </div>
          </article>
        </div>
      </div>

      <!-- Navigation buttons -->
      <!-- <div class="swiper-button-next">
         <i class="ri-arrow-right-s-line"></i>
      </div>
      
      <div class="swiper-button-prev">
         <i class="ri-arrow-left-s-line"></i>
      </div> -->

      <!-- Pagination -->
      <div class="swiper-pagination"></div>
    </div>

    <!-- end slider -->
    <footer class="footer-no-gap">
      <div class="container">
        <div class="col-lg-12">
          <p>
            Copyright © 2048 Villa Agency Co., Ltd. All rights reserved. Design:
            <a rel="nofollow" href="https://templatemo.com" target="_blank"
              >TemplateMo</a
            >
          </p>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{asset("web/vendor/jquery/jquery.min.js")}}"></script>
    <!-- <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->
    <script src="{{asset("web/vendor/bootstrap/js/bootstrap.min.js")}}"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="{{asset("web/assets/js/isotope.min.js")}}"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="{{asset("web/assets/js/owl-carousel.js")}}"></script>
    <script src="assets/js/counter.js"></script>
    <script src="{{asset("web/assets/js/counter.js")}}"></script>
    <script src="assets/js/custom.js"></script>
    <script src="{{asset("web/assets/js/counter.js")}}"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="{{asset("web/assets/js/swiper-bundle.min.js")}}"></script>
    <script src="assets/js/main.js"></script>
    <script src="{{asset("web/assets/js/main.js")}}"></script>
  </body>
</html>
