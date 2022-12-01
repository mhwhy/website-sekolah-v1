@extends('Dashboard.layouts.main',['title' => 'guru'])

@section('container')

<div class="card">
    <h5 class="card-header"><a href="/Dashboard/guru/tambah" class="btn btn-success mt-5">Input Guru Baru</a></h5>
    <div class="card-body">
        <div class="container">


            <div class="row g-4">
                @foreach ($guru as $s)
        <div class="col-lg-4 col-md-6">
            <div class="card card-guru" style="width: 20rem; ">
                <img src="{{ asset('img/' . $s->Foto) }}" alt="gambar" class="card-image-top img-fluid " style="width: 80%; left:35px; position:relative">
                <div class="card-body text-center">
                    <h6>{{ $s->Nama }}</h6>
                    <p>{{ $s->Mapel }}</p>
                    <p>{{ $s->Alamat }}</p>
                    <p>
                        <a href="/Dashboard/guru/edit/{{ $s->id }}"class="btn btn-warning">Edit</a>

                        <a href="/Dashboard/guru/hapus/{{ $s->id }}" class="btn btn-danger">Hapus</a>
                    </p>
                </div>
            </div>
        </div>
          @endforeach
        </div>
        </div>
    </div>
  </div>


@endsection

