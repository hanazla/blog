@include('template_blog.head')
<main id="main">
    <section>
        <div class="container">
            <div class="row">

                <div class="col-md-9" data-aos="fade-up">
                    <h3 class="category-title">Artikel Lainnya</h3>
                    @foreach($data as $list_post)
                    <div class="d-md-flex post-entry-2 half">
                        <a href="{{ route('blog.isi', $list_post->slug)}}" class="me-4 thumbnail">
                            <img src="{{asset($list_post->gambar)}}" alt="" class="img-fluid">
                        </a>
                        <div>
                            <div class="post-meta"><span class="date">{{$list_post->category->name}}</span> <span
                                    class="mx-1">&bullet;</span>
                                <span>{{$list_post->created_at}}</span>
                            </div>
                            <h3><a href="single-post.html">{{$list_post->judul}}</a></h3>
                            <div class="d-flex align-items-center author">
                                <div class="name">
                                    <h3 class="m-0 p-0">uploaded by {{$list_post->users->name}}</h3>
                                </div>
                                <!-- INI YANG BUAT TAG NYA -->
                                <p>{{$list_post->name}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{ $data->links() }}
                </div>
                <div class="col-md-3">
                    @include('template_blog.widget')
                </div>
            </div>
        </div>
    </section>
</main>


<!-- End Main -->
<!--=======Footer=======-->
@include('template_blog.footer')