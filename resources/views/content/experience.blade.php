{{-- isi konten experience --}}
@extends('index')

@section('title', 'experience')

@section('content')
<div class="tm-home-img-container">
</div>
<section class='tm-section'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                <h2 class="header-text-mid">Pengalaman Digital</h2>
                <p class="tm-subtitle">Kecantikan, Daya Tarik, Destinasi Kebudayaan, Warisan Sejarah,
                    Makanan Lezat yang Menyegarkan Selera, Pengalaman Wisata yang Tidak Terlupakan.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                <div class="tm-content-box">
                    <img src="assets/images/tumurun.jpg" alt="Image" class="tm-margin-b-21">
                    <h4 class="tm-margin-b-20 tm-gold-text">Museum Tumurun</h4>
                    <p class="tm-margin-b-20">Museum Tumurun Solo: Pusat seni terdepan,
                        koleksi luas, akses mudah, inovatif, dan mendidik.</p>
                    <a href="#" class="tm-btn-x text-uppercase">Detail</a>
                </div>

                <div class="tm-content-box">
                    <img src="assets/images/tumurun.jpg" alt="Image" class="tm-margin-b-21">
                    <h4 class="tm-margin-b-20 tm-gold-text">Museum Tumurun</h4>
                    <p class="tm-margin-b-20">Museum Tumurun Solo: Pusat seni terdepan,
                        koleksi luas, akses mudah, inovatif, dan mendidik.</p>
                    <a href="#" class="tm-btn-x text-uppercase">Detail</a>
                </div>

            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                <div class="tm-content-box">
                    <img src="assets/images/resto.jpg" alt="Image" class="tm-margin-b-21">
                    <h4 class="tm-margin-b-20 tm-gold-text">Pracima Tuin</h4>
                    <p class="tm-margin-b-20">pengalaman makan dengan suasana ala kerajaan Jawa, khususnya
                        budaya di Puro Mangkunegaran Solo</p>
                    <a href="#" class="tm-btn-x text-uppercase">Detail</a>
                </div>

                <div class="tm-content-box">
                    <img src="assets/images/resto.jpg" alt="Image" class="tm-margin-b-21">
                    <h4 class="tm-margin-b-20 tm-gold-text">Pracima Tuin</h4>
                    <p class="tm-margin-b-20">pengalaman makan dengan suasana ala kerajaan Jawa, khususnya
                        budaya di Puro Mangkunegaran Solo</p>
                    <a href="#" class="tm-btn-x text-uppercase">Detail</a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                <div class="tm-content-box">
                    <img src="assets/images/museum.jpg" alt="Image" class="tm-margin-b-21">
                    <h4 class="tm-margin-b-20 tm-gold-text">Museum Danar Hadi</h4>
                    <p class="tm-margin-b-20">
                        Museum Batik Danar Hadi: Menikmati keindahan batik
                        Indonesia melalui koleksi, pameran, dan workshop edukatif.</p>
                    <a href="#" class="tm-btn-x text-uppercase">Detail</a>
                </div>

                <div class="tm-content-box">
                    <img src="assets/images/museum.jpg" alt="Image" class="tm-margin-b-21">
                    <h4 class="tm-margin-b-20 tm-gold-text">Museum Danar Hadi</h4>
                    <p class="tm-margin-b-20">
                        Museum Batik Danar Hadi: Menikmati keindahan batik
                        Indonesia melalui koleksi, pameran, dan workshop edukatif.</p>
                    <a href="#" class="tm-btn-x text-uppercase">Detail</a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                <div class="tm-content-box">
                    <img src="assets/images/baito.jpg" alt="Image" class="tm-margin-b-21">
                    <h4 class="tm-margin-b-20 tm-gold-text">Baito Rajamala</h4>
                    <p class="tm-margin-b-20">Kapal legendaris Pakubuwono IV,
                        replika wisata ikonik Solo, rencana belum terealisasi.</p>
                    <a href="#" class="tm-btn-x text-uppercase">Detail</a>
                </div>

                <div class="tm-content-box">
                    <img src="assets/images/baito.jpg" alt="Image" class="tm-margin-b-21">
                    <h4 class="tm-margin-b-20 tm-gold-text">Baito Rajamala</h4>
                    <p class="tm-margin-b-20">Kapal legendaris Pakubuwono IV,
                        replika wisata ikonik Solo, rencana belum terealisasi.</p>
                    <a href="#" class="tm-btn-x text-uppercase">Detail</a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Pagination -->
<section class="pagination-number">
    <div class="pagination:container">
        <div class="pagination:number arrow">
            <svg width="18" height="18">
                <use xlink:href="#left" />
            </svg>
            <span class="arrow:text">Previous</span>
        </div>

        <div class="pagination:number">
            1
        </div>
        <div class="pagination:number">
            2
        </div>

        <div class="pagination:number pagination:active">
            3
        </div>

        <div class="pagination:number">
            4
        </div>

        <div class="pagination:number arrow">
            <svg width="18" height="18">
                <use xlink:href="#right" />
            </svg>

        </div>
    </div>
</section>

<svg class="hide">
    <symbol id="left" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
    </symbol>
    <symbol id="right" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
    </symbol>
</svg>
@endsection