@extends('layouts.main')

@section('container')

    <!-- image slider -->
    <div class="container mt-2">
        <div class="carousel slide" data-bs-ride="carousel" style="margin-top: -25px;">
     <div class="carousel-inner">
        <div class="carousel-item">
           <img src="img/14.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item active">
           <img src="img/11.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-caption mt-1 mb-0">
            <h5 style="color: black">Welcome to Shoes Store</h5>
         </div>
     </div>
  </div>

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


