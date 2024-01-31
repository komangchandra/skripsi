<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand fw-bold fst-italic" href="/">SIG Kedelai.</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }} mx-3" href="/">Beranda</a>
          <a class="nav-link {{ Request::is('artikel*') ? 'active' : '' }} mx-3" href="/artikel" >Artikel</a >
          <a class="nav-link {{ Request::is('tentang-kami') ? 'active' : '' }} ms-3" href="/tentang-kami">Tentang Kami</a
          >
        </div>
      </div>
  </div>
</nav>
