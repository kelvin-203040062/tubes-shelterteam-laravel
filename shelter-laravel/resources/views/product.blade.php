@extends('layouts.main')

@section('container')
<body>
   <div class="container mt-4">
      <h1 class="mb-3 text-center">{{ $title }}</h1>
<div class="row justify-content-center mb-3">
   <div class="col-md-6">
      <form action="/post">
          @if(request('category'))
              <input type="hidden" name="category" value="{{ request('category') }}">
          @endif
          @if(request('author'))
              <input type="hidden" name="author" value="{{ request('author') }}">
          @endif
         <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search..." name="search" value="">
            <button class="btn btn-primary" type="submit">Search</button>
         </div>
      </form>
   </div>
</div>

<!-- kondisi postingan -->
@if ($product->count())
<div class="main-card mb-3">
    @if($product[0]->image)
   <div class="main-img">
       <img src="{{ asset('storage/' . $product[0]->image) }}" alt="{{ $product[0]->category->name }}" class="img-fluid mt-3">
   </div>
    @else
        <img src="https://source.unsplash.com/1200x400/?{{ $product[0]->category->name}}" alt="{{ $product[0]->category->name }}" class="img-fluid">
    @endif
      <div class="card-body text-center">
      <h3 class="card-title"><a href="/product?author={{ $product[0]->slug }}" class="text-decoration-none text-dark"></a>{{ $product[0]->title }}</h3>
      <p class="card-text">{{ $product[0]->excerpt }}</p>
      <a href="/product/{{ $product[0]->slug }}" class="text-decoration-none btn btn-primary">{{ $button }}</a>
   </div>

    <div class="container">
        <div class="row">
            @foreach($product->skip(1) as $products)
            <div class="col-md-4 mb-3">
             <div class="card">
               <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7)"><a href="/product?category={{ $products->category->slug }}" class="text-white text-decoration-none">{{ $products->category->name }}</a></div>
                 @if($products->image)
                     <img src="{{ asset('storage/' . $products->image) }}" alt="{{ $products->category->name }}" class="img-fluid ">
                 @else
                     <img src="https://source.unsplash.com/500x400/?{{ $products->category->name }}" class="card-img-top" alt="{{ $products->category->name }}">
                 @endif
                 <div class="card-body">
                  <h5 class="card-title">{{ $products->title }}</h5>
                  <p class="card-text">{{ $products->excerpt }}</p>
                  <br>
                    <a href="/product/{{ $products->slug }}" class="btn btn-primary">{{ $button }}</a>
               </div>
            </div>
         </div>

            @endforeach

                @else
                    <p class="text-center fs-4">No Post Found.</p>
                @endif


                <div class="d-flex justify-content-end">
                    {{ $product->links() }}
                </div>



   <div class="container">
<script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css') }}" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/{{ $css }}">
@endsection
