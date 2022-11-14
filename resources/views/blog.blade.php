<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ZenBlog Bootstrap Template - Index</title>
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

    <!-- =======================================================
  * Template Name: ZenBlog - v1.2.1
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>ZenBlog</h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.html">Blog</a></li>
                    <li><a href="single-post.html">Single Post</a></li>
                    <li class="dropdown"><a href="category.html"><span>Categories</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="search-result.html">Search Result</a></li>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-down dropdown-indicator"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>

                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav><!-- .navbar -->

            <div class="position-relative">
                <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
                <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
                <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

                <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
                <i class="bi bi-list mobile-nav-toggle"></i>

                <!-- ======= Search Form ======= -->
                <div class="search-form-wrap js-search-form-wrap">
                    <form action="search-result.html" class="search-form">
                        <span class="icon bi-search"></span>
                        <input type="text" placeholder="Search" class="form-control">
                        <button class="btn js-search-close"><span class="bi-x"></span></button>
                    </form>
                </div><!-- End Search Form -->

            </div>

        </div>

    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Hero Slider Section ======= -->
        <section id="hero-slider" class="hero-slider">
            <div class="container-md" data-aos="fade-in">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper sliderFeaturedPosts">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="single-post.html" class="img-bg d-flex align-items-end"
                                        style="background-image: url('public/frontend/assets/img/post-slide-1.jpg')">
                                        <div class="img-bg-inner">
                                            <h2>The Best Homemade Masks for Face (keep the Pimples Away)</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque
                                                est mollitia! Beatae minima assumenda repellat harum vero, officiis
                                                ipsam magnam obcaecati cumque maxime inventore repudiandae quidem
                                                necessitatibus rem atque.</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="swiper-slide">
                                    <a href="single-post.html" class="img-bg d-flex align-items-end"
                                        style="background-image: url('public/frontend/assets/img/post-slide-2.jpg')">
                                        <div class="img-bg-inner">
                                            <h2>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New
                                                Haircut</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque
                                                est mollitia! Beatae minima assumenda repellat harum vero, officiis
                                                ipsam magnam obcaecati cumque maxime inventore repudiandae quidem
                                                necessitatibus rem atque.</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="swiper-slide">
                                    <a href="single-post.html" class="img-bg d-flex align-items-end"
                                        style="background-image: url('public/frontend/assets/img/post-slide-3.jpg')">
                                        <div class="img-bg-inner">
                                            <h2>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque
                                                est mollitia! Beatae minima assumenda repellat harum vero, officiis
                                                ipsam magnam obcaecati cumque maxime inventore repudiandae quidem
                                                necessitatibus rem atque.</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="swiper-slide">
                                    <a href="single-post.html" class="img-bg d-flex align-items-end"
                                        style="background-image: url('public/frontend/assets/img/post-slide-4.jpg');">
                                        <div class="img-bg-inner">
                                            <h2>9 Half-up/half-down Hairstyles for Long and Medium Hair</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque
                                                est mollitia! Beatae minima assumenda repellat harum vero, officiis
                                                ipsam magnam obcaecati cumque maxime inventore repudiandae quidem
                                                necessitatibus rem atque.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="custom-swiper-button-next">
                                <span class="bi-chevron-right"></span>
                            </div>
                            <div class="custom-swiper-button-prev">
                                <span class="bi-chevron-left"></span>
                            </div>

                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Hero Slider Section -->



        <section id="search-result" class="search-result">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h3 class="category-title">Postingan Terbaru</h3>

                        @foreach($data as $post_terbaru)
                        <div class="d-md-flex post-entry-2 small-img">
                            <a href="#" class="me-4 thumbnail">
                                <img src="{{ $post_terbaru -> gambar}}" alt="" class="img-fluid">
                            </a>
                            <div>
                                <div class="post-meta"><span class="date">{{$post_terbaru->category->name}}</span> <span
                                        class="mx-1">&bullet;</span>
                                    <span>{{$post_terbaru->created_at->diffForHumans()}}</span>
                                </div>
                                <h3><a href="#">{{$post_terbaru->judul}}</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat
                                    exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas.</p>
                                <div class="d-flex align-items-center author">
                                    <div class="name">
                                        <h3 class="m-0 p-0">{{$post_terbaru->users->name}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <!-- Paging -->
                        <div class="text-start py-4">
                            <div class="custom-pagination">
                                <a href="#" class="prev">Prevous</a>
                                <a href="#" class="active">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                                <a href="#">5</a>
                                <a href="#" class="next">Next</a>
                            </div>
                        </div><!-- End Paging -->

                    </div>

                    <div class="col-md-3">
                        <div class="aside-block">
                            <h3 class="aside-title">Categories</h3>
                            <ul class="aside-links list-unstyled">
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Business</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Culture</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Sport</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Food</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Politics</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Celebrity</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Startups</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Travel</a></li>
                            </ul>
                        </div><!-- End Categories -->

                        <div class="aside-block">
                            <h3 class="aside-title">Tags</h3>
                            <ul class="aside-tags list-unstyled">
                                <li><a href="category.html">Business</a></li>
                                <li><a href="category.html">Culture</a></li>
                                <li><a href="category.html">Sport</a></li>
                                <li><a href="category.html">Food</a></li>
                                <li><a href="category.html">Politics</a></li>
                                <li><a href="category.html">Celebrity</a></li>
                                <li><a href="category.html">Startups</a></li>
                                <li><a href="category.html">Travel</a></li>
                            </ul>
                        </div><!-- End Tags -->

                    </div>

                </div>
            </div>
        </section>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">

                <div class="row g-5">
                    <div class="col-lg-4">
                        <h3 class="footer-heading">About ZenBlog</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ab, perspiciatis beatae autem
                            deleniti voluptate nulla a dolores, exercitationem eveniet libero laudantium recusandae
                            officiis qui aliquid blanditiis omnis quae. Explicabo?</p>
                        <p><a href="about.html" class="footer-link-more">Learn More</a></p>
                    </div>
                    <div class="col-6 col-lg-2">
                        <h3 class="footer-heading">Navigation</h3>
                        <ul class="footer-links list-unstyled">
                            <li><a href="index.html"><i class="bi bi-chevron-right"></i> Home</a></li>
                            <li><a href="index.html"><i class="bi bi-chevron-right"></i> Blog</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Categories</a></li>
                            <li><a href="single-post.html"><i class="bi bi-chevron-right"></i> Single Post</a></li>
                            <li><a href="about.html"><i class="bi bi-chevron-right"></i> About us</a></li>
                            <li><a href="contact.html"><i class="bi bi-chevron-right"></i> Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-2">
                        <h3 class="footer-heading">Categories</h3>
                        <ul class="footer-links list-unstyled">
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Business</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Culture</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Sport</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Food</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Politics</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Celebrity</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Startups</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Travel</a></li>

                        </ul>
                    </div>

                    <div class="col-lg-4">
                        <h3 class="footer-heading">Recent Posts</h3>

                        <ul class="footer-links footer-blog-entry list-unstyled">
                            <li>
                                <a href="single-post.html" class="d-flex align-items-center">
                                    <img src="assets/img/post-sq-1.jpg" alt="" class="img-fluid me-3">
                                    <div>
                                        <div class="post-meta d-block"><span class="date">Culture</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <span>5 Great Startup Tips for Female Founders</span>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="single-post.html" class="d-flex align-items-center">
                                    <img src="assets/img/post-sq-2.jpg" alt="" class="img-fluid me-3">
                                    <div>
                                        <div class="post-meta d-block"><span class="date">Culture</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <span>What is the son of Football Coach John Gruden, Deuce Gruden doing
                                            Now?</span>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="single-post.html" class="d-flex align-items-center">
                                    <img src="assets/img/post-sq-3.jpg" alt="" class="img-fluid me-3">
                                    <div>
                                        <div class="post-meta d-block"><span class="date">Culture</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <span>Life Insurance And Pregnancy: A Working Mom’s Guide</span>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="single-post.html" class="d-flex align-items-center">
                                    <img src="assets/img/post-sq-4.jpg" alt="" class="img-fluid me-3">
                                    <div>
                                        <div class="post-meta d-block"><span class="date">Culture</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <span>How to Avoid Distraction and Stay Focused During Video Calls?</span>
                                    </div>
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div class="footer-legal">
            <div class="container">

                <div class="row justify-content-between">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <div class="copyright">
                            © Copyright <strong><span>Kerja Praktik Unjani 2022/2023</span></strong> </div>

                        <div class="credits">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
                            <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </footer>

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('public/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/vendor/swiper/swiper-bundle.min.js')}}">
    </script>
    <script src="{{asset('public/frontend/assets/vendor/glightbox/js/glightbox.min.js')}}">
    </script>
    <script src="{{asset('public/frontend/assets/vendor/aos/aos.js')}}">
    </script>
    <script src="{{asset('public/frontend/assets/vendor/php-email-form/validate.js')}}">
    </script>

    <!-- Template Main JS File -->
    <script src="{{asset('public/frontend/assets/js/main.js')}}"></script>

</body>

</html>