@include('template_blog.head')
<!-- ======= Hero Slider Section ======= -->
<section id="hero-slider" class="hero-slider">
    <div class="container-md" data-aos="fade-in">
        <div class="row">
            <div class="col-12">
                <div class="swiper sliderFeaturedPosts">
                    <div class="swiper-wrapper">
                        @foreach($data as $header)
                        <div class="swiper-slide">
                            <a href="{{route('blog.isi', $header->slug)}}" class="img-bg d-flex align-items-end"
                                style="background-image: url( {{$header->gambar}} )">
                                <div class="img-bg-inner">
                                    <h2>{{$header->judul}}</h2>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class=" custom-swiper-button-next">
                        <span class="bi-chevron-right"></span>
                    </div>
                    <div class="custom-swiper-button-prev">
                        <span class="bi-chevron-left"></span>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
</section>


<!--POST-->
<div class="selection">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header d-flex justify-content-between align-items-center mb-5">
                            <h2>Postingan Terbaru</h2>
                        </div>
                    </div>
                    @foreach($data as $post_terbaru)
                    <div class="col-lg-6">
                        <div class="post-entry-1">
                            <a href="{{route('blog.isi', $post_terbaru->slug)}}"><img src="{{$post_terbaru->gambar}}"
                                    alt="" class="img-fluid"></a>
                            <div class="post-meta"><span class="date">{{$post_terbaru->category->name}}</span> <span
                                    class="mx-1">&bullet;</span>
                                <span>{{$post_terbaru->created_at->diffForHumans()}}</span>
                            </div>
                            <h2><a href="single-post.html">{{$post_terbaru->judul}}</a></h2>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-4">
                @include('template_blog.widget')
            </div>
        </div>
    </div>
    @include('template_blog.footer')