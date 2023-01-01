@extends('layouts.main')

@section('container')

    <!-- image slider -->
    <div class="container mt-2">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" style="background-color:black"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" style="background-color:black"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" style="background-color:black"></button>
            </div>
            <div class="carousel-inner" style="border-radius: 10px">
                <div class="carousel-item active">
                    <img src="img/{{ $img }}" class="d-block w-100" style="filter: blur(3px); -webkit-filter: blur(3px)" >
                    <div class="carousel-caption d-md-block" style="margin-bottom: 300px; font-size: 30px; font-family: 'Roboto'">
                        <h1>{{ $slider }}</h1>
                        <p>{{ $slider2 }}</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/{{ $img2 }}" class="d-block w-100" style="filter: blur(3px); -webkit-filter: blur(3px)">
                    <div class="carousel-caption d-md-block" style="margin-bottom: 300px; font-size: 30px; font-family: 'Roboto'">
                        <h1>{{ $slider }}</h1>
                        <p>{{ $slider2 }}</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/{{ $img3 }}" class="d-block w-100" style="filter: blur(3px); -webkit-filter: blur(3px)">
                    <div class="carousel-caption d-md-block" style="margin-bottom: 300px; font-size: 30px; font-family: 'Roboto'">
                        <h1>{{ $slider }}</h1>
                        <p>{{ $slider2 }}</p>
                    </div>
                </div>
            </div>
        </div>
  </div>

        <p>

  <div class="row mb-5">
     <div class="col-md">
        <div class="card">
           <img src="img/{{ $img4 }}" class="card-img-top">
           <div class="card-body">
              <h3 style="text-align: center">{{ $tit }}</h3>
               <a href="/categories" class="btn btn-outline-success" role="button" style="margin-left: 115px; margin-top: 10px"><i class="bi bi-cart"></i> {{ $button }}</a>
           </div>
        </div>
     </div>
     <div class="col-md">
        <div class="card">
           <img src="img/{{ $img5 }}" class="card-img-top">
           <div class="card-body">
              <h3 style="text-align: center">{{ $tit2 }}</h3>
               <a href="/categories" class="btn btn-outline-success" role="button" style="margin-left: 115px; margin-top: 10px"><i class="bi bi-cart"></i> {{ $button }}</a>
           </div>
        </div>
     </div>
     <div class="col-md">
        <div class="card">
           <img src="img/{{ $img6 }}" class="card-img-top">
           <div class="card-body">
              <h3 style="text-align: center">{{ $tit3 }}</h3>
               <a href="/categories" class="btn btn-outline-success" role="button" style="margin-left: 115px; margin-top: 10px"><i class="bi bi-cart"></i> {{ $button }}</a>
              </div>
           </div>
        </div>
     </div>
   </div>
  </div>

  <div class="container" style="background-color: #ed2424; border-radius: 10px; max-width: 65%;">
    <h2 style="font-size: 60px; text-align:center; color:white;">PROMO</h2>
    <h2 style="font-size: 60px; text-align:center; color:white;">AWAL TAHUN</h2>
 </div>

 <section id="contact" class="contact mb-5">
    <div class="container">
       <div class="row pt-4 mb-4">
        <div class="card-header" style="border: none; border-radius: 10px" >
          <div class="col text-center">
             <h2 class="contact1"> {{ $contact }}</h2>
          </div>
        </div>
       </div>

       <div class="row justify-content-center">
          <div class="col-lg-4 ">
            <ul class="list-group">
                <li class="list-group-item" style="background-color: #2cc993; text-align: center">
                   <h1>{{ $loc }}</h1>
                </li>
                <li class="list-group-item">{{ $storename }}</li>
                <li class="list-group-item">{{ $addr }} </li>
             </ul>
              <br>
              <iframe src="{{ url('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.0113435133544!2d107.62025111420161!3d-7.00794657058814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e97ffa8547a3%3A0x12df3cba0331686c!2sJl.%20Baleendah%2C%20Baleendah%2C%20Kec.%20Baleendah%2C%20Kabupaten%20Bandung%2C%20Jawa%20Barat%2040375!5e0!3m2!1sid!2sid!4v1671723889264!5m2!1sid!2sid') }}" width="350" height="250" style="border:0; border-radius: 10px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                   <textarea name="message" id="message" class="form-control" style="height: 105px"></textarea>
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
<link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css') }}" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/{{ $css }} ">

<script src="{{ url('https://code.jquery.com/jquery-3.5.1.slim.min.js') }}" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="{{ url('https://kit.fontawesome.com/f8634d10b0.js') }}" crossorigin="anonymous"></script>
@endsection

