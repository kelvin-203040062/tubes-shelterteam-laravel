@extends('layouts.main')

@section('container')
  <div class="products"></div>
      <div class="product-image">
        <img src="http://co0kie.github.io/codepen/nike-product-page/nikeLogo.png" alt="" class="product-logo">
        <img src="http://co0kie.github.io/codepen/nike-product-page/nikeShoe.png" alt="" class="product-pic">
        <div class="dots">
          <a href="#!" class="active"><i>1</i></a>
          <a href="#!"><i>2</i></a>
          <a href="#!"><i>3</i></a>
          <a href="#!"><i>4</i></a>
        </div>
      </div>

      <div class="product-details">
        <header>
          <h1 class="title">Nike Roshe</h1>
          <span class="colorCat">mint green</span>
          <div class="price">
            <span class="before">$150</span>
            <span class="current">$144.99</span>
          </div>
          <div class="rate">
            <a href="#!" class="active">★</a>
            <a href="#!" class="active">★</a>
            <a href="#!" class="active">★</a>
            <a href="#!">★</a>
            <a href="#!">★</a>
          </div>
        </header>
        <article>
          <h5>Description</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </article>
        <div class="controls">
          <div class="color">
            <h5>color</h5>
            <ul>
              <li><a href="#!" class="colors color-bdot1 active"></a></li>
              <li><a href="#!" class="colors color-bdot2"></a></li>
              <li><a href="#!" class="colors color-bdot3"></a></li>
              <li><a href="#!" class="colors color-bdot4"></a></li>
              <li><a href="#!" class="colors color-bdot5"></a></li>
            </ul>
          </div>
          <div class="size">
            <h5>size</h5>
            <a href="#!" class="option">(UK 8)</a>
          </div>
          <div class="qty">
            <h5>qty</h5>
            <a href="#!" class="option">(1)</a>
          </div>
        </div>
        <div class="footer">
          <button type="button">
            <img src="http://co0kie.github.io/codepen/nike-product-page/cart.png" alt="">
            <span>add to cart</span>
          </button>
           <a href="#!"><img src="http://co0kie.github.io/codepen/nike-product-page/share.png" alt=""></a>
        </div>
      </div>

    </div>

 <link href="css/{{ ('products.css') }}" rel="stylesheet">


<div class="container">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
<link href="css/{{ ('products.css') }}" rel="stylesheet">
<script src="{{ url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}" rel="stylesheet" crossorigin="anonymous"></script>

@endsection
