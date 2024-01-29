<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="dns-prefetch" href="/register-form/fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="register-form/fonts/icomoon/style.css">
    <link rel="stylesheet" href="register-form/css/style.css"> 
    <link rel="stylesheet" href="register-form/css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="register-form/css/bootstrap.min.css">
    <style>         
        body {
            background-color: #f8f9fa;
        }
        #app {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .form-block {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            margin: auto; /* Center the form horizontally */
        }
        @media (max-width: 576px) {
            .form-block {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div id="app">
        <div class="col-lg-5 contents">
            <div class="form-block">
                <div class="mb-4 text-center">
                    <h3>Sign Up</h3>
                    <p class="mb-4">Please fill in this form to create an account.</p>
                </div>
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <label for="role">Role</label><br>
<select name="role" id="role" class="form-control">
    <option value="admin">Admin</option>
    <option value="student">Student</option>
</select><br>
                    <div class="form-group first">
                        <label for="name">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group last mb-4">
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="d-flex mb-5 align-items-center">
                        <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption"><a href="#">Terms and Conditions</a></span>
                            <input type="checkbox" checked="checked"/>
                            <div class="control__indicator"></div>
                        </label>
                        <span class="ml-auto"><a href="{{ route('login') }}" class="forgot-pass">Sign In</a></span> 
                    </div>

                    <input type="submit" value="Sign Up" class="btn btn-pill text-white btn-block btn-primary">
                </form>
            </div>
        </div>
    </div>

    <script src="register-form/js/jquery-3.3.1.min.js"></script>
    <script src="register-form/js/popper.min.js"></script>
    <script src="register-form/js/bootstrap.min.js"></script>
    <script src="register-form/js/main.js"></script>
</body>
</html>
