@extends('layouts.main')
@section('container')
<section id="hero" class="d-flex justify-content-center align-items-center">
  <div class="position-relative" data-aos="zoom-in" data-aos-delay="100">
    <h1>SMKN 2 TRENGGALEK</h1>
    <h2>Merupakan salah satu lembaga pendidikan <br> menengah kejuruan di kota trenggalek</h2>
  </div>
  
</section>

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card card-home h-100">
      <div class="card-body">
        <h5 class="card-title">Prakata kepala sekolah</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card card-home h-100">
      <div class="card-body">
        <h5 class="card-title">Program sekolah</h5>
        <p class="card-text">This is a short card.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card card-home h-100">
      <div class="card-body">
        <h5 class="card-title">Program keahlian</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
</div>
<div>
  <h4 class="position pt-5 fw-bold d-inline-block"><i class="fa-regular fa-newspaper me-2"></i>Berita terbaru</h4>
  <h4 class="position pt-5 fw-bold d-inline-block" style="margin-left: 550px"><i class="fa-regular fa-newspaper me-2"></i>Info Kegiatan</h4>

</div>

<div class="card card-home mb-5 mt-5 d-inline-block" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="assets/img/foto.jpeg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
<div class="card card-home mb-5 mt-5 d-inline-block" style="max-width: 540px; margin-left:200px">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="assets/img/foto.jpeg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>


@endsection