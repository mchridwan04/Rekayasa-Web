<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <!-- <a class="navbar-brand" href="#">Rekayasa Web</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link {{ ($title === "NIM") ?'active' : '' }}" href="/nim"><b>NIM</b></a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ ($title === "Beranda") ?'active' : '' }}" href="/beranda">Beranda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ ($title === "Profil") ?'active' : '' }}" href="/profil">Profil</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ ($title === "Blog") ?'active' : '' }}" href="/blog">Blog</a>            
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Berita") ?'active' : '' }}" href="/berita">Berita</a>            
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Jurnal") ?'active' : '' }}" href="/jurnal">Jurnal</a>            
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Login</a>
                    </li>
            </ul>
        </div>
    </div>
</nav>