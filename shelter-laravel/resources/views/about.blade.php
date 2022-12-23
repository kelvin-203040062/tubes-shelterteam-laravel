@extends('layouts.main')

@section('container')

<body>
  <main id="main">
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
            .conf adalah sebuah website yang menyediakan berbagai macam jenis sepatu mulai dari Adidas, Nike sampai Puma, kami menjual sepatu yang berkualitas dn nyaman saat digunakan. Beberapa keungulan dari sepatu yang kami jual adalah :</p>
            <ul>
              <li>- Harga terjangkau</li>
              <li>- Kualitas terbaik</li>
              <li>- Bervariatif</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            .conf memberikan harga tetap terjangkau tanpa mengurangi kualitas produknya. Kami bertujuan untuk menciptakan seni dalam bentuk sepatu. Kami percaya bahwa setiap pasangan adalah ekspresi yang tidak dapat disalin atau dibuat ulang. Kami ingin berbagi berbagai bentuk seni yang mewakili ANDA.
            </p>
            <a href="#" class="btn-learn-more">Selengkapnya</a>
          </div>
        </div>
      </div>
    </section>
    <!-- ======= About image Section ======= -->
    <section id="about-image" class="about-image">
      <div class="container" data-aos="fade-up">
        <div class="row">

          <div class="col-lg-6 image-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
            <img src="img/{{ ('14.png') }}" class="img-fluid" alt="" style="border-radius: 10px">
          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Aneka produk sepatu yang kami sediakan.</h3>
            <p class="fst-italic">
            Selain harga yang terjangkau dan kualitas yang baik, .conf memiliki banyak pilihan jenis dan model sehingga Anda mungkin tidak akan bosan.
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> Adidas</li>
              <li><i class="bx bx-check-double"></i> Nike</li>
              <li><i class="bx bx-check-double"></i> Puma</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  <!-- End About image Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">
        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="img/{{ ('clients/Shopee.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="img/{{ ('clients/Lazada.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="img/{{ ('clients/tokopedia.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="img/{{ ('clients/amazon.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="img/{{ ('clients/jdid.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="img/{{ ('clients/ebay.png') }}" class="img-fluid" alt="">
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- End Clients Section -->

  <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>.CONF Shoes Store</h2>
          <p>Shelter Team</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Wah barangnya bagus banget, nyaman dipakai, ga nyesel belanja disini, terpercaya banget, harga juga terjangkau, penjualnya juga ramah, chat langsung dibalas.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="img/{{ ('testimonials/kelvin.jpeg') }}" class="testimonial-img">
                <h3>Kelvin</h3>
                <h4>Team Leader</h4>
              </div>
            </div>
          <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Saya tidak menyangka dengan harga semurah itu saya bisa mendapatkan sepatu original dengan kualitas sebagus ini, top 10 bintang untuk penjualnya.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="img/{{ ('testimonials/hervin.jpeg') }}" class="testimonial-img">
                <h3>Hervin Fakhrul Mahardika</h3>
                <h4>Back End</h4>
              </div>
            </div>
          <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Sangat cantik. Ukurannya juga sempurna. Sepertinya kualitas ini akan bertahan sangat lama. Terima kasih!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="img/{{ ('testimonials/mahendra.jpeg') }}" class="testimonial-img">
                <h3>Rizky Mahendra</h3>
                <h4>Back End</h4>
              </div>
            </div>
          <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Pengirimannya cepat, beli produk disini sangat berbaloi, harga terjangkau, adminnya responsif banget, recommended banget belanja di toko ini.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="img/{{ ('testimonials/yulius.jpeg') }}" class="testimonial-img">
                <h3>Yulius Yogi Yuwono</h3>
                <h4>Front End</h4>
              </div>
            </div>
          <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Keracunan temen yang membeli produk ini karena pas sampai barangnya bagus jadi langsung checkout, tidak mengecewakan. Sangat direkomendasikan.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="img/{{ ('testimonials/religi.jpeg') }}" class="testimonial-img" alt="">
                <h3>Religi Realista Esthetika</h3>
                <h4>Front End</h4>
              </div>
            </div>
          <!-- End testimonial item -->
          </div>
        </div>
      </div>
    </section>
   <!-- End Testimonials Section -->

</body>

<div class="container">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
<link href="css/{{ ('about.css') }}" rel="stylesheet">

@endsection
