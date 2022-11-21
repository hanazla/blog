<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Menikah.co.id</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="active"><a href="{{ route('home') }}" class="nav-link"><i class="fas fa-fire"></i>
                    <span>Dashboard</span></i></a>

            </li>
            <li class="menu-header">Starter</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book-open"></i>
                    <span>Postingan</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('post.index') }}">Daftar Artikel</a></li>
                    <li><a class="nav-link" href="{{ route('post.tampil_hapus') }}">Trashed Artikel</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-clipboard"></i>
                    <span>Kategori</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('category.index') }}">List Kategori</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-hashtag"></i>
                    <span>Tag</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('tag.index') }}">List Tag</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i>
                    <span>Users</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('user.index') }}">List User</a></li>
            </li>
    </aside>
</div>