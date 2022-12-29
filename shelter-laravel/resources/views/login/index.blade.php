<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }} | .conf</title>
    <link rel="stylesheet" type="text/css" href="css/{{ $css }}">
    <link href="{{ url('https://fonts.googleapis.com/css?family=Poppins:600&display=swap') }}" rel="stylesheet">
    <script src="{{ url('https://kit.fontawesome.com/a81368914c.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<img class="wave" src="img/bg/{{ $wave }}">
<div class="container">
        <div class="img">
        <img src="img/bg/{{ $bg }}">
    </div>
    <div class="login-content">
        <form action="/login" method="post">
            @csrf
            <img src="img/bg/{{ $avatar }}">
            <h2 class="title">{{ $home }}</h2>
            @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show " role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
            @endif
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
            @endif

            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>{{ $user }}</h5>
                    <input type="text" name="username" class="input @error('username') is-invalid @enderror" id="username" required value="{{ old('username') }}">
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>{{ $pass }}</h5>
                    <input type="password" name="password" class="input" id="password" required>
                </div>
            </div>
            <a href="/register">{{ $register }}</a>
            <input type="submit" class="btn" value="Login">
        </form>
    </div>
</div>
<script type="text/javascript" src="js/{{ $js }}"></script>
</body>
</html>

