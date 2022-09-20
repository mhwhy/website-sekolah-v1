@extends('layouts.main')
@section('container')
<h1 class="mt-4">SMKN 2 TRENGGALEK</h1>
<p>Jln. Ronggo warsito Gg Sidomukti No. 01, Sumbergedong, Kec. Trenggalek, Kab. Trenggalek Prov. Jawa Timur</p>
<hr>
    <!-- carousel -->
    <div class="row wrap-carousel">
      <div class="col-8 h-100 pr-1">
        <div
          id="carouselExampleIndicators"
          class="carousel slide h-100"
          data-ride="carousel">
          <div class="carousel-inner h-100">
            <div class="carousel-item active h-200">
              <img src="assets/img/smkn.png" class="d-block w-100 h-100" alt="smkn"/>
              <div class="card mt-4 mb-3">
                <div class="card-group">
                  <div class="card shadow ">
                    <div class="card-body">
                      <p class="card-text d-inline">Guru : 189</p><br>
                      <p class="card-text d-inline">Siswa Laki- laki : 459</p> <br>
                      <p class="card-text d-inline">Siswi Perempuan : 360</p>
                      <p class="card-text d-inline">Rombongan belajar : 119</p>
                    </div>
                  </div>
                  <div class="card shadow ">
                    <div class="card-body">
                      <p class="card-text d-inline">Kurikulum : SMK 2013 REV</p>
                      <p class="card-text d-inline">Penyelenggaraan : Sehari Penuh/5 hari</p>
                      <p class="card-text d-inline">Manajemen Berbasis Sekolah : </p>
                      <p class="card-text d-inline">Semester Data : 2022/2023-1</p>
                    </div>
                  </div>
                  <div class="card shadow ">
                    <div class="card-body ">
                      <p class="card-text d-inline">Akses Internet : Telkom Speedy</p>
                      <p class="card-text d-inline">Sumber Listrik : PLN</p>
                      <p class="card-text d-inline">Daya Listrik : 80,000</p>
                      <p class="card-text d-inline">Luas Tanah : 18,290 M²</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        </div>
      </div>
      <div class="col-4 h-100 w-20 pl-0">
        <div class="h-50">
          <div class="card mb-3" style="width: 26rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item" style="background: #155c76;"><a class="text-white" href="#">Detail Sekolah (DAPODIK) Klik Disini</a></li>
              <li class="list-group-item" style="background: #7FBCD2;"> Akreditasi : A</li>
              <li class="list-group-item">Kepala Sekolah : Sumitra</li>
              <li class="list-group-item"> Operator : Imam Mukhlis Suprayitno</li>
            </ul>
          </div>
        </div>
        <div class="h-50 pt-1">
          <div class="card p-2 mb-3" style="background: #155c76">
           <p class="text-white">Berikan saran, komentar dan informasi Anda untuk SMK NEGERI 2 TRENGGALEK</p> 
          </div>
          <div class="card p-2" style="background: #ee9e0a">
           <p class="text-white">Sekolah dapat memperbaiki data melalui : <br>
            Aplikasi Dapodikdasmen <br>
            Verifikasi-Validasi Satuan Pendidikan <br>
            Verifikasi-Validasi Peserta Didik <br>
            Verifikasi-Validasi PTK</p> 
          </div>
        </div>
      </div>
    </div>
@endsection