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
        <form action="/register" method="post">
            @csrf
            <img src="img/bg/{{ $avatar }}">
            <h2 class="title">{{ $home }}</h2>

            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-id-card"></i>
                </div>
                <div class="div">
                    <h5>{{ $name }}</h5>
                    <input type="text" name="name" class="input @error('name') is-invalid @enderror" id="name" required value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>{{ $user }}</h5>
                    <input type="text" name="username" class="input @error('username') is-invalid @enderror" id="username" required value="{{ old('username') }}">
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="div">
                    <h5>{{ $email }}</h5>
                    <input type="email" name="email" class="input @error('email') is-invalid @enderror" id="email" required value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>{{ $pass }}</h5>
                    <input type="password" name="password" class="input @error('password') is-invalid @enderror" id="password" required value="{{ old('password') }}">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <a href="/login">{{ $login }}</a>
            <input type="submit" class="btn" value="Daftar">
        </form>
    </div>
</div>
<script type="text/javascript" src="js/{{ $js }}"></script>
</body>
</html>

