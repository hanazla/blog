@include('template_blog.head')

<main id="main">

    <section class="single-post-content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 post-content" data-aos="fade-up">

                    <!-- ======= Single Post Content ======= -->
                    @foreach($data as $isi_post)
                    <div class="single-post">
                        <div class="post-meta"><span class="date">{{$isi_post->category->name}}</span> <span
                                class="mx-1">&bullet;</span>
                            <span>{{$isi_post->created_at->diffForHumans()}}</span>
                        </div>
                        <h1 class="mb-3">{{$isi_post->judul}}</h1>
                        <div class="sharethis-sticky-share-buttons"></div>
                        <figure class="px-5">
                            <img src="{{asset($isi_post->gambar)}}" alt="" class="img-fluid" style="width: 800px;">
                        </figure>

                        <!-- INI YANG BUAT TAG NYA -->
                        <p>{{$isi_post->name}}</p>
                        <!-- -->

                        {!!$isi_post -> content!!}
                    </div><!-- End Single Post Content -->
                    @endforeach

                    <!-- ======= Comments ======= -->

                    <!-- ======= Comments Form ======= -->
                    <!-- End Comments Form -->

                </div>
                <div class="col-md-3">
                    <!-- ======= Sidebar ======= -->


                    <!-- CATEGORIES -->
                    @include('template_blog.widget')
                    <!-- End Tags -->

                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('template_blog.footer')