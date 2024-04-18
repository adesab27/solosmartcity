{{-- isi konten experience --}}
@extends('index')

@section('title', 'experience')

@section('content')
    {{-- <div class="tm-home-img-container">
</div> --}}
    <div class="main-banner">
        <div class="item item-51">
            <div class="header-text">
                <span class="category">Surakarta, <em>Jawa Tengah</em></span>
                <h3>Kota Budaya<br />yang Modern Tangguh Gesit Kreatif dan Sejahtera.</h3>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                <h2 class="header-text-mid">Pengalaman Digital</h2>
                <p class="tm-subtitle">Kecantikan, Daya Tarik, Destinasi Kebudayaan, Warisan Sejarah,
                    Makanan Lezat yang Menyegarkan Selera, Pengalaman Wisata yang Tidak Terlupakan.</p>
            </div>
        </div>
    </div>
    </div>
    <section class="gallery-3d">
        <div class="gallery">
            <div class="gallery__strip__wrapper">
                <div class="gallery__strip one">
                    <div class="photo">
                        <div class="photo__image"><img
                            src="{{asset("assets/images/budaya-11.jpg")}}" /></div>
                        <div class="photo__name">Keraton</div>
                    </div>
                    <div class="photo">
                        <div class="photo__image"><img
                            src="{{asset("assets/images/solo-safaroo.jpg")}}" /></div>
                        <div class="photo__name">Solo Safari</div>
                    </div>
                    <div class="photo">
                        <div class="photo__image"><img
                            src="{{asset("assets/images/budaya-11.jpg")}}" /></div>
                        <div class="photo__name">Keraton</div>
                    </div>
                    <div class="photo">
                        <div class="photo__image"><img
                            src="{{asset("assets/images/stp-solo.jpg")}}" /></div>
                        <div class="photo__name2">Solo</div>
                        <div class="photo__name">Technopark</div>
                    </div>
                </div>
            </div>
            <div class="gallery__strip__wrapper">
                <div class="gallery__strip two">
                    <div class="photo">
                        <div class="photo__image"><img
                            src="{{asset("assets/images/mesjid.jpg")}}" /></div>
                        <div class="photo__name2">Masjid Raya</div>
                        <div class="photo__name">Sheikh Zayed</div>
                    </div>
                    <div class="photo">
                        <div class="photo__image"><img
                            src="{{asset("assets/images/pracima-tuin2.jpg")}}" /></div>
                        <div class="photo__name2">Pracima Tuin</div>
                    </div>
                    <div class="photo">
                        <div class="photo__image"><img
                            src="{{asset("assets/images/tugu-keris1.jpg")}}" /></div>
                        <div class="photo__name">Tugu Keris</div>
                    </div>
                    <div class="photo">
                        <div class="photo__image"><img
                            src="{{asset("assets/images/mesjid-2.jpg")}}" /></div>
                            <div class="photo__name2">Masjid Raya</div>
                            <div class="photo__name">Sheikh Zayed</div>
                    </div>
                </div>
            </div>
            <div class="gallery__strip__wrapper">
                <div class="gallery__strip three">
                    <div class="photo">
                        <div class="photo__image"><img
                            src="{{asset("assets/images/pracima-tuin2.jpg")}}" /></div>
                        <div class="photo__name2">Pracima Tuin</div>
                    </div>
                    <div class="photo">
                        <div class="photo__image"><img
                            src="{{asset("assets/images/budaya-11.jpg")}}" /></div>
                        <div class="photo__name">Keraton</div>
                    </div>
                    <div class="photo">
                        <div class="photo__image"><img
                            src="{{asset("assets/images/mesjid-2.jpg")}}" /></div>
                            <div class="photo__name2">Masjid Raya</div>
                            <div class="photo__name">Sheikh Zayed</div>
                    </div>
                    <div class="photo">
                        <div class="photo__image"><img
                            src="{{asset("assets/images/tugu-keris1.jpg")}}" /></div>
                        <div class="photo__name">Tugu Keris</div>
                    </div>
                </div>
            </div>
            <div class="gallery__strip__wrapper">
                <div class="gallery__strip four">
                    <div class="photo">
                        <div class="photo__image"><img
                            src="{{asset("assets/images/ngarsopuro.jpg")}}" /></div>
                        <div class="photo__name2">Koridor</div>
                        <div class="photo__name">Ngarsopuro</div>
                    </div>
                    <div class="photo">
                        <div class="photo__image"><img
                            src="{{asset("assets/images/budaya-11.jpg")}}" /></div>
                        <div class="photo__name">Keraton</div>
                    </div>
                    <div class="photo">
                        <div class="photo__image"><img
                            src="{{asset("assets/images/mesjid.jpg")}}" /></div>
                            <div class="photo__name2">Masjid Raya</div>
                            <div class="photo__name">Sheikh Zayed</div>
                    </div>
                    <div class="photo">
                        <div class="photo__image"><img
                            src="{{asset("assets/images/solo-safaroo.jpg")}}" /></div>
                        <div class="photo__name">solo safari</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
