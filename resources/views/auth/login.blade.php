<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('public/login/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('public/login/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('public/login/css/bootstrap.min.css')}}">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('public/login/css/style.css')}}">

    <title>Login</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
    <div class="content">

        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <img src="{{asset('public/login/images/undraw_file_sync_ot38.svg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-group first">
                                    <label for="email">{{ __('Email Address') }}</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
    @endsection


    <script src="{{asset('public/login/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('public/login/js/popper.min.js')}}"></script>
    <script src="{{asset('public/login/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/login/js/main.js')}}"></script>
</body>

</html>