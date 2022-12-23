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
            .conf founded in 2022, is a shoe brand based in Indonesia, that seeks and manufactures the perfect locally made leather shoes for every day. They use synthetic or vegan leather sprouts from brand advocacy, namely to avoid using animal skins for their products.
            the advantages of our products are:</p>
            <ul>
              <li>- Affordable prices with</li>
              <li>- Good quality</li>
              <li>- Many kinds of models to choose from</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            .conf also aims to remain affordable without compromising on the quality of its products. We aim to create art in the form of shoes. We believe that every pair is an expression that cannot be copied or recreated. We want to share various art forms that represent YOU.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
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
            <h3>Various shoe products that we sell.</h3>
            <p class="fst-italic">
            Besides affordable prices and good quality, .conf has a wide selection of types and models so you probably won't get bored.
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> Sneakers</li>
              <li><i class="bx bx-check-double"></i> Slip On</li>
              <li><i class="bx bx-check-double"></i> Running</li>
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
                  Wow, the item is really good, it's comfortable to wear, you don't regret shopping here, it's very reliable, the price is also affordable, the seller is also friendly, chat is answered immediately.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="img/{{ ('testimonials/kelvin.jpeg') }}" class="testimonial-img">
                <h3>Kelvin Ardiansah</h3>
                <h4>Team Leader</h4>
                <a href="https://github.com/kelvin-203040062/"><i class="bi bi-github" style="color: black"></i> </a>
                <a href="https://www.instagram.com/fazy_stain/"><i class="bi bi-instagram" style="color: black"></i> </a>
              </div>
            </div>
          <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I didn't expect that at such a low price I could get original shoes with this good quality, top 10 stars for the seller.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="img/{{ ('testimonials/hervin.jpeg') }}" class="testimonial-img">
                <h3>Hervin Fakhrul Mahardika</h3>
                <h4>Back End</h4>
                <a href="https://github.com/QueenAgella/"><i class="bi bi-github" style="color: black"></i> </a>
                <a href="https://www.instagram.com/hervinfakhrul/"><i class="bi bi-instagram" style="color: black"></i> </a>
              </div>
            </div>
          <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Very beautiful. The size is also perfect. It looks like this quality will last really long. Thanks!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="img/{{ ('testimonials/mahendra.jpeg') }}" class="testimonial-img">
                <h3>Rizky Mahendra</h3>
                <h4>Back End</h4>
                <a href="https://github.com/Alginatic/"><i class="bi bi-github" style="color: black"></i> </a>
                <a href="https://www.instagram.com/rzkymhnn/"><i class="bi bi-instagram" style="color: black"></i> </a>
              </div>
            </div>
          <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  The delivery is fast, buying products here is really worth it, the price is affordable, the admin is really responsive, I really recommend shopping at this store.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="img/{{ ('testimonials/yulius.jpeg') }}" class="testimonial-img">
                <h3>Yulius Yogi Yuwono</h3>
                <h4>Front End</h4>
                <a href="https://github.com/YuliusYogiYuwono/"><i class="bi bi-github" style="color: black"></i> </a>
                <a href="https://www.instagram.com/yuliusyogi_/"><i class="bi bi-instagram" style="color: black"></i> </a>
              </div>
            </div>
          <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Poisoned by a friend who bought this product because when it arrived it was good so it went straight to gas checkout, didn't disappoint. Super recommended.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="img/{{ ('testimonials/religi.jpeg') }}" class="testimonial-img" alt="">
                <h3>Religi Realista Esthetika</h3>
                <h4>Front End</h4>
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
