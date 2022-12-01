@extends('layouts.main',['title' => 'loker'])
@section('container')
<div class="card mb-3" style="max-width: 1500px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{url('img/'.$loker->gambar) }}" class=" img-fluid rounded-start" alt="..." style="width: 80%">
      </div>
      <div class="col-md-8 mt-2">
        <div class="card-body">
          <h5 class="card-title">{{ $loker->nama_pekerjaan }}</h5>
          <p class="card-text">{{ $loker->nama_perusahaan }}</p>
          <p class="mb-2">{{ $loker->gaji }}</p>
                            <p class="mb-2">{{ $loker->Alamat }}</p>
                        <h6>Deskripsi:<p></h6>{{ $loker->deskripsi }}</p>
                        <a href="/Dashboard/loker" class="btn btn-primary">Kembali</a>
        </div>
      </div>
    </div>
  </div>
@endsection
