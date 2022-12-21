@extends('layouts.main')

@section('container')

<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="https://gamepedia.cursecdn.com/minecraft_gamepedia/a/a7/Heart.svg?version=dac1a46352ab4c25ad78a3cef0ceea86">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


   <!-- ikon -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

   <!-- my css -->
   <link href="css/{{ ('blog.css') }}" rel="stylesheet">

   <title>.conf | Shoes Store</title>
</head>

<body>


   <div class="container mt-4">
      <h1 class="mb-3 text-center">Shoes Store</h1>

<div class="row justify-content-center mb-3">
   <div class="col-md-6">
      <form action="/post">
         <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search.." name="search" value="">
            <button class="btn btn-primary" type="submit">Search</button>
         </div>
      </form>
   </div>
</div>

<!-- kondisi postingan -->
<div class="card mb-3" style="background-color: white; border: none">
   <div style="max-height: 350px; margin-left:auto; margin-right:auto; display:block; background-color: white">
      <img src="https://codebytes6.000webhostapp.com/storage/post-images/2rlrSXJeZWNrq82DDNxen7GfncQtd3YGJ93aANRn.jpg" alt="Converse" class="img-fluid" style="width: 400px; height: 400px;">
   </div>
   <div class="card-body text-center">
      <h3 class="card-title"><a href="/posts/converse-green-high" class="text-decoration-none text-dark">Converse green high</a></h3>
      <p>
         <small class="text-muted">
            by. <a href="/post?author=jaya" class="text-decoration-none"> Jaya Permadi</a> in <a href="/post?category=converse" class="text-decoration-none">Converse</a> 1 year ago
         </small>
      </p>

      <p class="card-text">KENYAMANAN TIADA HENTI.Bantalannya lebih empuk, kanvasnya lebih kuat, sama serba gunanya. Chuck 70 dirancang berdasarkan desain orisinal tahun 1970-an, dengan material premium dan perhatian luar biasa...</p>

      <a href="/posts/converse-green-high" class="text-decoration-none btn btn-primary">Readmore</a>

   </div>


    <div class="container">

        <div class="row">
                  <div class="col-md-4 mb-3">
            <div class="card" style="background-color: white; border: none">
               <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7)"><a href="/post?category=Vans" class="text-white text-decoration-none">Vans</a></div>
                <img src="https://codebytes6.000webhostapp.com/storage/post-images/ET7ChuXLeL7AWDoLVz2pmYWumR04kMephQscPTCk.jpg" alt="Vans" class="img-fluid">
                <div class="card-body">
                  <h5 class="card-title">vans</h5>
                  <p>
                     <small class="text-muted">
                        by. <a href="/post?author=jaya" class="text-decoration-none"> Jaya Permadi</a> 1 year ago
                     </small>
                  </p>
                  <p class="card-text">First known as the Vans #36, the Old Skool debuted in 1977 with a unique new addition: a random doodle drawn by founder Paul Van Doren, and originally referred to as the “jazz stripe.” Today, the famo...</p>
                  <a href="/posts/vans" class="btn btn-primary">Read more..</a>
               </div>
            </div>
         </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="background-color: white; border: none">
               <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7)"><a href="/post?category=converse" class="text-white text-decoration-none">Converse</a></div>
                <img src="https://codebytes6.000webhostapp.com/storage/post-images/gPPS0Efyqd82Hv8KLX8rYaXFrl35p9nF2kVvLUQZ.jpg" alt="Converse" class="img-fluid">
                <div class="card-body">
                  <h5 class="card-title">Converse black low</h5>
                  <p>
                     <small class="text-muted">
                        by. <a href="/post?author=jaya" class="text-decoration-none"> Jaya Permadi</a> 1 year ago
                     </small>
                  </p>
                  <p class="card-text">KENYAMANAN TIADA HENTI.Bantalannya lebih empuk, kanvasnya lebih kuat, sama serba gunanya. Chuck 70 dirancang berdasarkan desain orisinal tahun 1970-an, dengan material premium dan perhatian luar biasa...</p>
                  <a href="/posts/converse-black-low" class="btn btn-primary">Read more..</a>
               </div>
            </div>
         </div>
                  <div class="col-md-4 mb-3">
            <div class="card" style="background-color: white; border: none">
               <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7)"><a href="/post?category=converse" class="text-white text-decoration-none">Converse</a></div>
                <img src="https://codebytes6.000webhostapp.com/storage/post-images/NpQmWfftuANV3ayyaOo1nZCeGXSdKth0VBNOdJIe.jpg" alt="Converse" class="img-fluid">
                <div class="card-body">
                  <h5 class="card-title">Converse white green</h5>
                  <p>
                     <small class="text-muted">
                        by. <a href="/post?author=viqri" class="text-decoration-none"> Muhammad Viqri Febriana</a> 1 year ago
                     </small>
                  </p>
                  <p class="card-text">KENYAMANAN TIADA HENTI.Bantalannya lebih empuk, kanvasnya lebih kuat, sama serba gunanya. Chuck 70 dirancang berdasarkan desain orisinal tahun 1970-an, dengan material premium dan perhatian luar biasa...</p>
                  <a href="/posts/converse-white-green" class="btn btn-primary">Read more..</a>
               </div>
            </div>
         </div>
                  <div class="col-md-4 mb-3">
            <div class="card" style="background-color: white; border: none">
               <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7)"><a href="/post?category=Ventela" class="text-white text-decoration-none">Ventela</a></div>
                <img src="https://codebytes6.000webhostapp.com/storage/post-images/Dthck7AGE9PBwvO7IFYv69Zbzd6Wh0U7tWxdG3OL.jpg" alt="Ventela" class="img-fluid">
                <div class="card-body">
                  <h5 class="card-title">ventela low green</h5>
                  <p>
                     <small class="text-muted">
                        by. <a href="/post?author=viqri" class="text-decoration-none"> Muhammad Viqri Febriana</a> 1 year ago
                     </small>
                  </p>
                  <p class="card-text">Upper Canvas 12ozMenggunakan material canvas 12oz berkualitas baik, cukup lembut, dan memiliki daya tahan yang kuat sehingga cocok untuk digunakan sehari-hari.Ultralite Foam InsoleTeknologi Ultralite...</p>
                  <a href="/posts/ventela-low-green" class="btn btn-primary">Read more..</a>
               </div>
            </div>
         </div>
            <div class="col-md-4 mb-3">
                <div class="card" style="background-color: white; border: none">
                <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7)"><a href="/post?category=Ventela" class="text-white text-decoration-none">Ventela</a></div>
                    <img src="https://codebytes6.000webhostapp.com/storage/post-images/qLAmq8oIKzwCckkqlA7naP4DTPSlMy7dtuxZ6V7q.jpg" alt="Ventela" class="img-fluid">
                    <div class="card-body">
                    <h5 class="card-title">ventela navy</h5>
                    <p>
                        <small class="text-muted">
                        by. <a href="/post?author=dadang" class="text-decoration-none"> dadang Situmorang</a> 1 year ago
                        </small>
                    </p>
                    <p class="card-text">Upper Canvas 12ozMenggunakan material canvas 12oz berkualitas baik, cukup lembut, dan memiliki daya tahan yang kuat sehingga cocok untuk digunakan sehari-hari.Ultralite Foam InsoleTeknologi Ultralite...</p>
                    <a href="/posts/ventela-navy" class="btn btn-primary">Read more..</a>
               </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="background-color: white; border: none">
               <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7)"><a href="/post?category=Vans" class="text-white text-decoration-none">Vans</a></div>
                <img src="https://codebytes6.000webhostapp.com/storage/post-images/NgRtdaFTz8e5YeQs7qmQb9hmUBmYzGaQmPD9jhsD.png" alt="Vans" class="img-fluid">
                <div class="card-body">
                  <h5 class="card-title">vans low black</h5>
                  <p>
                     <small class="text-muted">
                        by. <a href="/post?author=viqri" class="text-decoration-none"> Muhammad Viqri Febriana</a> 1 year ago
                     </small>
                  </p>
                  <p class="card-text">First known as the Vans #36, the Old Skool debuted in 1977 with a unique new addition: a random doodle drawn by founder Paul Van Doren, and originally referred to as the “jazz stripe.” Today, the famo...</p>
                  <a href="/posts/vans-high-black" class="btn btn-primary">Read more..</a>
                    </div>
                </div>
            </div>
        </div>
   </div>

   <div class="d-flex justify-content-end">
      <nav>
        <ul class="pagination">
            <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                <span class="page-link" aria-hidden="true">&lsaquo;</span>

        </ul>
    </nav>

   </div>
</footer>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</html>
<div class="container">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
@endsection
