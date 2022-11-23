<div class="aside-block">
    <h3 class="aside-title">Kategori</h3>
    <ul class="aside-links list-unstyled">
        @foreach($category_widget as $hasil)
        <li><a href="{{route('blog.category', $hasil->slug)}}"><i class="bi bi-chevron-right"></i>{{$hasil -> name}}
            </a>
        </li>
        @endforeach
    </ul>
</div>

<!-- TAG -->