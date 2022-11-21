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
<div class="aside-block">
    <h3 class="aside-title">Tags</h3>
    <ul class="aside-tags list-unstyled">
        @foreach($tag_widget as $result)
        <li><a href="{{ route('blog.tags', $result->slug)}}">{{ $result -> name}}</a></li>
        @endforeach
    </ul>
</div>