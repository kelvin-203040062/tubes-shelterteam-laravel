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
            <h2>Kategori Kami</h2>
            <p>Saat memilih alas kaki, pastikan kamu menyesuaikannya dengan jenis acara dan kemana kamu akan pergi. Memilih sepatu yang tepat akan mempercantik penampilan dan menambah rasa percaya diri.</p>
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
                                <p>Keunggulan lain yang Adidas tawarkan adalah bobot sepatu yang cenderung ringan, serta dengan bahan yang lembut, sehingga selain nyaman, sepatu bola Adidas juga membantu Anda dalam berlari dan mengolah bola.</p>
                            </div>
                            <button type = "button" class = "read-btn">Selengkapnya</button>
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
                                <p>Sepatu Nike adalah produk yang diluncurkan oleh Nike Inc. Nike Inc. adalah produsen sepatu dan perlengkapan olahraga dari Amerika Serikat. Didirikan pada tanggal 30 Mei 1978, kini Nike telah menjadi salah satu merek olahraga terbaik dan tersebar di seluruh dunia.</p>
                            </div>
                            <button type = "button" class = "read-btn">Selengkapnya</button>
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
                                <p>Sepatu Puma merupakan alas kaki yang dihadirkan oleh merk serupa dan berasal dari Jerman. Merk ini memproduksi beraneka jenis sepatu olahraga. Pusat perusahaan ini berada di Herzonenaurach, Bavaria, Jerman.</p>
                            </div>
                            <button type = "button" class = "read-btn">Selengkapnya</button>
                        </div>
                        <!-- end of single post -->

                    </div>
                </div>
            </div>
        </div>


    </body>
</html>

<div class="container">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
<link href="css/{{ ('about.css') }}" rel="stylesheet">

@endsection
