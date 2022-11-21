<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Artikel - Menikah.co.id</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('public/frontend/assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('public/frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('public/frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS Files -->
    <link href="{{asset('public/frontend/assets/css/variables.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/assets/css/main.css')}}" rel="stylesheet">
    <script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=637a214ecfe2d50019eb6cb1&product=sticky-share-buttons&source=platform"
        async="async">
    </script>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{url('')}}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>Menikah.co.id</h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{url('')}}">Beranda</a></li>
                    <li><a href="{{route('blog.list')}}">Blog</a></li>
                    <li class="dropdown"><a href="#"><span>Kategori</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            @foreach($category_widget as $result1)
                            <li><a href="{{route('blog.category', $result1->slug)}}">{{$result1->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </nav><!-- .navbar -->


            <div class="position-relative">

                <a href="#" class="js-search-open"><span class="bi-search"></span></a>
                <i class="bi bi-list mobile-nav-toggle"></i>

                <!-- ======= Search Form ======= -->
                <div class="search-form-wrap js-search-form-wrap">
                    <form action="{{route('blog.cari')}}" method="GET" class="search-form">
                        <input type="text" class=" form-control" name="cari" placeholder="Search">
                        <button class="btn js-search-close"></button>
                        <button class="btn"><span class="bi-search"></button>
                    </form>
                </div><!-- End Search Form -->

            </div>

        </div>
    </header>