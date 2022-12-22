@extends('layouts.main')

@section('container')

    <!-- image slider -->
    <div class="container mt-2">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/122.jpg" class="d-block w-100" style="filter: blur(3px); -webkit-filter: blur(3px)" >
                    <div class="carousel-caption d-none d-md-block" style="margin-bottom: 150px; font-size: 30px; font-family: 'Roboto'">
                        <h1>Welcome to .conf Shoes Store</h1>
                        <p>Happy Shopping</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/14.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/11.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
        </div>
  </div>

        <p>

  <div class="row mb-5">
     <div class="col-md ">
        <div class="card">
           <img src="img/Adidas.jpg" class="card-img-top" alt="...">
           <div class="card-body">
              <h3 style="text-align: center">Adidas</h3>
               <a href="/categories" class="btn btn-outline-success" role="button" style="margin-left: 100px; margin-top: 10px"><i class="bi bi-cart"></i> Explore</a>
           </div>
        </div>
     </div>
     <div class="col-md">
        <div class="card">
           <img src="img/Nike.jpg" class="card-img-top" alt="...">
           <div class="card-body">
              <h3 style="text-align: center">Nike</h3>
               <a href="/categories" class="btn btn-outline-success" role="button" style="margin-left: 100px; margin-top: 10px"><i class="bi bi-cart"></i> Explore</a>
           </div>
        </div>
     </div>
     <div class="col-md">
        <div class="card">
           <img src="img/Puma.jpg" class="card-img-top" alt="...">
           <div class="card-body">
              <h3 style="text-align: center">Puma</h3>
               <a href="/categories" class="btn btn-outline-success" role="button" style="margin-left: 100px; margin-top: 10px"><i class="bi bi-cart"></i> Explore</a>
              </div>
           </div>
        </div>
     </div>
   </div>
  </div>

  <div class="container" style="background-color: #ed2424; border-radius: 10px">
    <h2 style="font-size: 100px; text-align:center; color:white;">PROMO</h2>
    <h2 style="font-size: 100px; text-align:center; color:white;">AWAL</h2>
    <h2 style="font-size: 100px; text-align:center; color:white;">TAHUN</h2>
 </div>

 <section id="contact" class="contact mb-5">
    <div class="container">
       <div class="row pt-4 mb-4">
          <div class="col text-center">
             <h2 class="contact1">Contact</h2>
          </div>
       </div>

       <div class="row justify-content-center">
          <div class="col-lg-4 ">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.0113435133544!2d107.62025111420161!3d-7.00794657058814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e97ffa8547a3%3A0x12df3cba0331686c!2sJl.%20Baleendah%2C%20Baleendah%2C%20Kec.%20Baleendah%2C%20Kabupaten%20Bandung%2C%20Jawa%20Barat%2040375!5e0!3m2!1sid!2sid!4v1671723889264!5m2!1sid!2sid" width="340" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
             <ul class="list-group">
                <li class="list-group-item" style="background-color: #2cc993; text-align: center">
                   <h1 >Location</h1>
                </li>
                <li class="list-group-item">.conf Shoes Store</li>
                <li class="list-group-item">Jl. Baleendah Kab. Bandung Selatan </li>
                <li class="list-group-item">Jawa Barat, Indonesia</li>
             </ul>
          </div>

          <div class="col-lg-6 isian">
             <form>
                <div class="form-group">
                   <label for="Nama">Name</label>
                   <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                   <label for="Email">Email</label>
                   <input type="text" class="form-control" id="email">
                </div>
                <div class="form-group">
                   <label for="No Telpon">Phone</label>
                   <input type="text" class="form-control" id="phone">
                </div>
                <div class="form-group">
                   <label for="pesan">Message</label>
                   <textarea name="message" id="message" class="form-control"></textarea>
                </div>
                <div class="from-grup">
                   <button type="button" class="btn btn-outline-primary">Send</button>
                </div>
             </form>
          </div>
       </div>
    </div>
 </section>

<div class="container">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/f8634d10b0.js" crossorigin="anonymous"></script>
@endsection
