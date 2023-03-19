



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/auth.css')}}">
   
    <title>Document</title>
</head>
<body>
<div class="login-signup-form animated fadeInDown">
            <div class="form">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h1 class='title'>Sign up for free</h1>
                    <div class="fullname">
                    <input type="text" placeholder="Full Name"  name="name" class="@error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="email">
                    <input type="email" placeholder="Email"  class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />
                    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="password">
                    <input type="password" placeholder="Password"  class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password"/>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="password confirmation">
                    <input type="password" placeholder="Password Confirmation" name="password_confirmation" required autocomplete="new-password" />

                    </div>
                    <button class="btn btn-block">Sign up</button>
                    <p class="message">
                        Already Registred? <a href="login">Sign in</a>
                    </p>
                </form>
            </div>
        </div>
</body>
</html>