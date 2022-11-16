<div class="aside-block">
    <h3 class="aside-title">Categories</h3>
    <ul class="aside-links list-unstyled">
        @foreach($category_widget as $hasil)
        <li><a href="{{route('blog.category', $hasil->slug)}}"><i class="bi bi-chevron-right"></i>{{$hasil -> name}}
            </a>
        </li>
        @endforeach
    </ul>
</div>

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
</div>