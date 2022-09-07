<nav class="navbar navbar-expand-lg" style="background-color: #5bb318; font-weight:bold;">
    <div class="container">
        <img src="assets/img/logorpl.png" width="60">
      <a class="navbar-brand text-white" href="#">SMKN 2 TRENGGALEK</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ">
        <a class="nav-link text-white" {{ ($title==="Home")?'active':'' }} aria-current="page" href="/home">Home</a>
        <a class="nav-link text-white" {{ ($title==="Berita")?'active':'' }} href="/berita">Berita</a>
        <a class="nav-link text-white" {{ ($title==="Agenda")?'active':'' }} href="/agenda">Agenda</a>
        <a class="nav-link text-white" {{ ($title==="Kontak")?'active':'' }} href="/kontak">kontak</a>
        <a class="nav-link text-white" {{ ($title==="profile")?'active':'' }} href="/profile">profile</a>
        </div>
        </div>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
