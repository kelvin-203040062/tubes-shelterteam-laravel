@extends('layouts.main')

@section('container')

    <!-- image slider -->
    <div class="container mt-2">
        <div class="carousel slide" data-bs-ride="carousel" style="margin-top: -25px;">
     <div class="carousel-inner">
        <div class="carousel-item">
           <img src="img/122.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item active">
           <img src="img/11.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-caption mt-1 mb-0">
            <h5 style="color: black"></h5>
         </div>
     </div>
  </div>

<p>

  <div class="row mb-5">
     <div class="col-md ">
        <div class="card">
           <img src="img/Adidas.jpg" class="card-img-top" alt="...">
           <div class="card-body">
              <h3>Adidas</h3>
              <div class="progress">
              </div>
           </div>
        </div>
     </div>
     <div class="col-md">
        <div class="card">
           <img src="img/Nike.jpg" class="card-img-top" alt="...">
           <div class="card-body">
              <h3>Nike</h3>
              <div class="progress">
              </div>
           </div>
        </div>
     </div>
     <div class="col-md">
        <div class="card">
           <img src="img/Puma.jpg" class="card-img-top" alt="...">
           <div class="card-body">
              <h3>Puma</h3>
              <div class="progress">
              </div>
           </div>
        </div>
     </div>
     <div class="col-md">
      <div class="card">
         <img src="img/13.jpg" class="card-img-top" alt="...">
         <div class="card-body">
            <h3>Vans</h3>
            <div class="progress">
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
             <div class="card text-white mb-3 text-center" style="background-color: #2cc993">
                <div class="card-body">
                   <h5 class="card-title ">Shelter</h5>
                   <p class="card-text">Terimakasih karena sudah mengunjungi toko kami</p>
                </div>
             </div>
             <ul class="list-group">
                <li class="list-group-item">
                   <h1>location</h1>
                </li>
                <li class="list-group-item">Shelter Shoes</li>
                <li class="list-group-item">Jl. Baleendah Kab. Bandung Selatan </li>
                <li class="list-group-item">Jawa Barat, indonesia</li>
             </ul>
          </div>



          <div class="col-lg-6 isian">
             <form>
                <div class="form-group">
                   <label for="Nama">Nama </label>
                   <input type="text" class="form-control" id="Nama">
                </div>
                <div class="form-group">
                   <label for="Email">Email </label>
                   <input type="text" class="form-control" id="Email">
                </div>
                <div class="form-group">
                   <label for="No Telpon">No Telpon </label>
                   <input type="text" class="form-control" id="No Telpon">
                </div>
                <div class="form-group">
                   <label for="pesan">Pesan </label>
                   <textarea name="pesan" id="pesan" class="form-control"></textarea>
                </div>
                <div class="from-grup">
                   <button type="button" class="btn btn-primary">Kirim pesan</button>
                </div>
             </form>
          </div>


       </div>

    </div>

 </section>
<div class="container">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
</script>

@endsection
