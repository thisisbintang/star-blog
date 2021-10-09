<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="/">Star Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}" aria-current="page"
                        href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('about') ? 'active' : '' }}" href="/about">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('posts.*') ? 'active' : '' }}" href="/posts">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('authors.*') ? 'active' : '' }}" href="/authors">Penulis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('categories.*') ? 'active' : '' }}"
                        href="/categories">Kategori</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
