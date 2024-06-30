<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{ asset('css/stylesign.css') }}" />
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
</head>
<body>
    <button class="btn-close"> <a href="/" style="text-decoration:none;color: #5a3c28" >⬅</button></a>

        <div class="login-card">
            <img src="./img/logoR.jpg" />
            <h2>Sign Up</h2>
            <h3>Enter your credentials</h3>
            <form class="login-form" action="{{ route('register') }}" method="post">
                @csrf
                @if (session()->has('LoginEror'))
                <div>
                    <script>alert("You haven't registered yet, please register first!")</script>
                </div>
                @endif

                <input class="control  @error('name') is-invalid @enderror" type="text" id="user" name="name" placeholder="username"  value="{{ old('name') }}"/>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <div class="username">
                    <input spellcheck="false" class="control @error('email') is-invalid @enderror" type="email" placeholder="Email" name="email" value="{{ old('email') }}" />
                    <div id="spinner" class="spinner"></div>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                </div>
                <input class="control @error('nomor_telepon') is-invalid @enderror" name="nomor_telepon" placeholder="Nomor Telepon"  value= "{{ old('nomor_telepon') }}" />
                    @error('nomor_telepon')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <input placeholder="Tanggal Lahir" class="control" type="text" onfocus="(this.type='date')"
                        onblur="(this.type='text')" name="birth_date" value= "{{ old('birth_date') }}"/>
                    @error('birth_date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <input spellcheck="false" class="control" id="password" type="password" placeholder="Password" name="password"
                        onkeyup="handleChange()" value="{{ old('password') }}"/>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                <div id="bars">
                    <div></div>
                </div>
                <div class="strength" id="strength"></div>
                <button class="control" type="submit">JOIN NOW</button>
                <span class="loginwith">Sign in with social network</span>
                <div class="">
                    <button class="sosmed"><i class="fa-brands fa-facebook" style="color: #0000ff;"></i>Log in with Facebook</button>
                    <button class="sosmed"><i class="fa-brands fa-twitter" style="color: #0080ff;"></i>Log in with Twitter</button>
                    <button class="sosmed"><i class="fa-brands fa-google-plus-g" style="color: #ff3c3c;"></i></i>Log in with Google+</button>
                </div>
            </form>
        </div>

    <script type="text/javascript" src="{{ asset('js/mainsign.js') }}"></script>
    <script src="{{ asset('https://kit.fontawesome.com/cb9e4975fe.js') }}" crossorigin="anonymous"></script>
</body>
</html>
