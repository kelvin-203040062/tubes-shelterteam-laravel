@extends('layouts.main')

@section('container')

<body>
  <main id="main">
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{ $title }}</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
            {{ $about }}
            </p>
            <ul>
              <li>{{ $one }}</li>
              <li>{{ $two }}</li>
              <li>{{ $three }}</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
                {{ $about2 }}
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
            <h3>{{ $product }}</h3>
            <p class="fst-italic">
                {{ $product2 }}
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> {{ $product3 }}</li>
              <li><i class="bx bx-check-double"></i> {{ $product4 }}</li>
              <li><i class="bx bx-check-double"></i> {{ $product5 }}</li>
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
                    {{ $quote2 }}
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                  <img src="img/testimonials/{{ $image2 }}" class="testimonial-img" alt="{{ $name2 }}}">
                <h3>{{ $name2 }}</h3>
                <h4>{{ $job2 }}</h4>
                <a href="https://github.com/kelvin-203040062/"><i class="bi bi-github" style="color: black"></i> </a>
                <a href="https://www.instagram.com/fazy_stain/"><i class="bi bi-instagram" style="color: black"></i> </a>
              </div>
            </div>
          <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    {{ $quote }}
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                  <img src="img/testimonials/{{ $image }}" class="testimonial-img" alt="{{ $name }}">
                <h3>{{ $name }}</h3>
                <h4>{{ $job }}</h4>
                <a href="https://github.com/QueenAgella/"><i class="bi bi-github" style="color: black"></i> </a>
                <a href="https://www.instagram.com/hervinfakhrul/"><i class="bi bi-instagram" style="color: black"></i> </a>
              </div>
            </div>
          <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    {{ $quote3 }}
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="img/testimonials/{{ $image3 }}" class="testimonial-img" alt="{{ $name3 }}">
                <h3>{{ $name3 }}</h3>
                <h4>{{ $job3 }}</h4>
                <a href="https://github.com/Alginatic/"><i class="bi bi-github" style="color: black"></i> </a>
                <a href="https://www.instagram.com/rzkymhnn/"><i class="bi bi-instagram" style="color: black"></i> </a>
              </div>
            </div>
          <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    {{ $quote4 }}
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                  <img src="img/testimonials/{{ $image4 }}" class="testimonial-img" alt="{{ $name4 }}">
                  <h3>{{ $name4 }}</h3>
                <h4>{{ $job4 }}</h4>
                <a href="https://github.com/YuliusYogiYuwono/"><i class="bi bi-github" style="color: black"></i> </a>
                <a href="https://www.instagram.com/yuliusyogi_/"><i class="bi bi-instagram" style="color: black"></i> </a>
              </div>
            </div>
          <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    {{ $quote5 }}
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                  <img src="img/testimonials/{{ $image5 }}" class="testimonial-img" alt="{{ $name5 }}">
                  <h3>{{ $name5 }}</h3>
                <h4>{{ $job5 }}</h4>
                <a href="https://github.com/realistarrr/"><i class="bi bi-github" style="color: black"></i> </a>
                <a href=" https://instagram.com/realistarrr/"><i class="bi bi-instagram" style="color: black"></i> </a>
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
