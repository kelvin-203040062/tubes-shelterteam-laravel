@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/{{ ('categories.css') }}" rel="stylesheet">
        <script src="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <div class = "main-container">
            <h2>Our Categories</h2>
            <p>When choosing footwear, make sure you adjust it to the type of event and where you are going. Choosing the right shoes will enhance your appearance and increase your self-confidence.</p>
            <div class = "filter-container">
                <div class = "posts-collect">
                    <div class = "posts-main-container">
                        <!-- single post -->
                        <div class = "all business">
                            <div class = "post-img">
                                <img src = "img/Adidas.jpg" alt = "post">
                                <span class = "category-name">Adidas</span>
                            </div>

                            <div class = "post-content">
                                <h2>Impossible is Nothing</h2>
                                <p>Another advantage that Adidas offers is that the weight of the shoes tends to be light, and with soft materials, so apart from being comfortable, Adidas soccer shoes also help you to run and process the ball.</p>
                            </div>
                            <button type = "button" class = "read-btn">Read All</button>
                        </div>
                        <!-- end of single post -->
                        <!-- single post -->
                        <div class = "all business">
                            <div class = "post-img">
                                <img src = "img/Nike.jpg" alt = "post">
                                <span class = "category-name">Nike</span>
                            </div>

                            <div class = "post-content">
                                <h2>Just Do It!</h2>
                                <p>Nike shoes are a product launched by Nike Inc. Nike Inc. is a manufacturer of shoes and sports equipment from the United States. Founded on May 30, 1978, now Nike has become one of the best sports brands and has spread all over the world.</p>
                            </div>
                            <button type = "button" class = "read-btn">Read All</button>
                        </div>
                        <!-- end of single post -->
                        <!-- single post -->
                        <div class = "all business">
                            <div class = "post-img">
                                <img src = "img/puma.jpg" alt = "post">
                                <span class = "category-name">Puma</span>
                            </div>

                            <div class = "post-content">
                                <h2>Forever Faster</h2>
                                <p>Puma's old logo features a puma or mountain lion jumping in the D hole which is the initial of the family, namely Dassler. In 1968 the logo was changed to make it more modern. Finally the logo of a puma is jumping towards the name PUMA which is written in bold letters to become the official logo until now.</p>
                            </div>
                            <button type = "button" class = "read-btn">Read All</button>
                        </div>
                        <!-- end of single post -->
                        <!-- single post -->
                        <div class = "all business">
                            <div class = "post-img">
                                <img src = "img/11.jpg" alt = "post">
                                <span class = "category-name">Vans</span>
                            </div>

                            <div class = "post-content">
                                <h2>Of The Wall</h2>
                                <p>Vans is known for its durability and good comfort for everyday use. Some models feature padded sides behind the foot. What makes this brand even more interesting is its varied designs with cool combinations and motifs.</p>
                            </div>
                            <button type = "button" class = "read-btn">Read All</button>
                        </div>
                        <!-- end of single post -->
                      
                    </div>
                </div>
            </div>
        </div>
        

    </body>
</html>

<div class="container">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">

@endsection