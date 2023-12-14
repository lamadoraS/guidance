

<!doctype html>
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

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
              
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                     <ul class="navbar-nav me-auto">

                    </ul> 


    <div class="content">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <span class="d-block text-center my-4 text-muted"> Or sign up with</span>
            <div class="social-login text-center">
              <a href="#" class="facebook btn btn-block">
                <span class="icon-facebook mr-3"></span> 
              </a>
              <a href="#" class="twitter btn btn-block">
                <span class="icon-twitter mr-3"></span> 
              </a>
              <a href="#" class="google btn btn-block">
                <span class="icon-google mr-3"></span> 
              </a>
            </div>

          </div>
          <div class="col-lg-2 my-5 text-center">
            &mdash; or &mdash;
          </div>
          <div class="col-lg-5 contents">
            <div class="form-block">
            <div class="mb-4 text-center">
                  <h3>Sign Up</h3>
                  <p class="mb-4">Please         fill          in          this       form    to    create    an       account .</p>
                </div>
                <form action="{{ route('register') }}" method="post">
                  @csrf
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
                    <label for="re-password">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  </div>
                    
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
      </div>
    </div>

    <script src="register-form/js/jquery-3.3.1.min.js"></script>
    <script src="register-form/js/popper.min.js"></script>
    <script src="register-form/js/bootstrap.min.js"></script>
    <script src="register-form/js/main.js"></script>