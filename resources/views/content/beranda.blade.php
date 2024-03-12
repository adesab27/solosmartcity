{{-- isi beranda --}}
@extends('index')

@section('title', 'beranda')

@section('content')
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
        <a href="/dimensi">
        <div class="konten">
          <img src="{{asset("assets/images/governance.jpg")}}" />
          <h1>Smart Governance</h1>
        </div>
        </a>
      </div>
      <div class="smart_link">
        <a href="/dimensi">
        <div class="konten">
          <img src="{{asset("assets/images/branding.jpg")}}" />
          <h1>Smart Branding</h1>
        </div>
        </a>
      </div>
      <div class="smart_link">
        <a href="/dimensi">
        <div class="konten">
          <img src="{{asset("assets/images/economy.jpg")}}" />
          <h1>Smart Economy</h1>
        </div>
        </a>
      </div>
      <div class="smart_link">
        <a href="/dimensi">
        <div class="konten">
          <img src="{{asset("assets/images/living.jpg")}}" />
          <h1>Smart Living</h1>
        </div>
        </a>
      </div>
      <div class="smart_link">
        <a href="/dimensi">
        <div class="konten">
          <img src="{{asset("assets/images/environtment.jpg")}}" />
          <h1>Smart Environment</h1>
        </div>
        </a>
      </div>
      <div class="smart_link">
        <a href="/dimensi">
        <div class="konten">
          <img src="{{asset("assets/images/society.jpg")}}" />
          <h1>Smart Society</h1>
        </div>
        </a>
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
                src="{{asset("assets/images/video-frame.jpg")}}"
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
                src="{{asset("assets/images/logo-ska.jpg")}}"
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
                src="{{asset("assets/images/logo-ska.jpg")}}"
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
                src="{{asset("assets/images/logo-ska.jpg")}}"
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
                src="{{asset("assets/images/logo-ska.jpg")}}"
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
                src="{{asset("assets/images/logo-ska.jpg")}}"
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
                src="{{asset("assets/images/logo-ska.jpg")}}"
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
                src="{{asset("assets/images/logo-ska.jpg")}}"
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
                src="{{asset("assets/images/logo-ska.jpg")}}"
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

@endsection