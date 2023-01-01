@extends('layouts.main')

@section('container')
    <body>
        <div class = "main-container">
            <h2>{{ $home }}</h2>
            <p>{{ $par1 }}</p>
            <div class = "filter-container">
                <div class = "posts-collect">
                    <div class = "posts-main-container">
                        <!-- single post -->
                        @foreach($categories as $category)
                        <div class = "all business">
                            <div class = "post-img">
                                <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" class="img-fluid mt-3" style="width: 450px; height:330px; margin-left:2%">
                                <span class = "category-name">{{ $category->name }}</span>
                            </div>

                            <div class = "post-content" style="margin-left: 22%">
                                <h2></h2>
                                <p>{{ $category->excerpt }}</p>
                            </div>
                            <a href="/product?category={{ $category->slug }}" class="btn btn-outline-success" role="button" style="margin-left: 32%; margin-top:-10px;margin-bottom:70px">{{ $button }}</a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </body>

<div class="container">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
<link href="css/{{ ('responcategories.css') }}" rel="stylesheet">
<link href="css/{{ ('categories.css') }}" rel="stylesheet">
<script src="{{ url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}" rel="stylesheet" crossorigin="anonymous"></script>

@endsection
