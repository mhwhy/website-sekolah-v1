@extends('Dashboard.layouts.main',['title' => 'loker'])

@section('container')

<h1>Halaman Loker</h1>
    <a href="/Dashboard/loker/tambah" class="btn btn-success m-4 " style="width: 15%
    ">Input Loker Baru</a>
    <br><br>

    <div class="row">
    @foreach ($loker as $l)
    <div class="col-md-6">
    <div class="card card-fluid mb-3">
	<div class="row g-0">
		<div class="col-md-4 my-auto">
                    <img src="{{ url('img/'. $l->gambar) }}" class="ms-2 img-fluid rounded-start" alt="gambar">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title mt-3">{{ $l->nama_pekerjaan }}</h5>
                        <p class="card-text">{{ $l->nama_perusahaan }}</p>
                        <p class="card-text">{{ $l->lokasi }}</p>
                        <p class="card-text">Rp. {{ $l->gaji }}</p>
                        <p class="card-text"><small class="text-muted">{{ $l->updated_at }}</small></p>
                        <a href="/Dashboard/loker/detail/{{ $l->id }}" class="btn btn-success">detail</a>
                        <a href="/Dashboard/loker/edit/{{ $l->id }}" class="btn btn-warning">edit</a>
                        <a href="/Dashboard/loker/hapus/{{ $l->id }}" class="btn btn-danger">Hapus</a>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection

