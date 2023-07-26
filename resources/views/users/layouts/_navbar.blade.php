<!-- ======= Header/Navbar ======= -->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">Melalito<span class="color-b">bali</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link" href="">Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Paket Tour</a>
            <div class="dropdown-menu">
              @foreach ($kategori as $k)
                <a class="dropdown-item " href="">{{ $k->nama_kategori }}</a>
              @endforeach
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="contact.html">Transfer</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="contact.html">Aktivitas Di Bali</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="blog-grid.html">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="contact.html">Contact</a>
          </li>

        </ul>
      </div>

    </div>
  </nav><!-- End Header/Navbar -->