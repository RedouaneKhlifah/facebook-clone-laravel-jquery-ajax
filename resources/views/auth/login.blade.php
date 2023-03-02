

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
                <form method="POST" action="{{ route('login') }}">
                @csrf
                    <h1 class='title'>Login into your account</h1>
                    <div class="email">
                    <input type="email" placeholder="Email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    
                    <div class="password">

                    <input type="password" placeholder="Password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
                    @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                     @enderror
                    </div>
                    
                    <button class="btn btn-block">Login</button>
                    <p class="message">
                        Not Registred? <Link to="/signup">Create an account</Link>
                    </p>
                </form>
            </div>
        </div>
</body>
</html>