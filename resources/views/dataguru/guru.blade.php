@extends('layouts.main2',['title' => 'guru'])

@section('container2')

<div class="container">


<h1>DATA GURU RPL</h1>
 <div class="card-body">
 <a href="/dataguru/guru/tambah" class="btn btn-success">Input Guru Baru</a>
 <br/> <br/>

 <table class="table table-bordered table-hover table-striped">
<thead align="center">
<tr>
    <th >ID</th>
    <th >NAMA</th>
    <th >MAPEL</th>
    <th >JENIS KELAMIN</th> <th>ALAMAT</th>
    <th >FOTO</th>
    <th >AKSI</th>
</tr>
</thead>
<tbody>
@foreach ($guru as $s)
<tr>
    <td>{{ $s->id }}</td>
    <td>{{ $s->Nama }}</td>
    <td>{{ $s->Mapel }}</td>
    <td>{{ $s->Jenis_kelamin }}</td>
    <td>{{ $s->Alamat }}</td> <td><img src="{{url('img/'.$s->Foto)}}" width="100px"></td>
    <td>
<a href="/dataguru/guru/edit/{{ $s->id }}"class="btn btn-warning">Edit</a>

<a href="/dataguru/guru/hapus/{{ $s->id }}" class="btn btn-danger">Hapus</a>
</td>
</tr>
@endforeach
</tbody>
</table>

{{-- <div class="row g-4">
@foreach ($guru as $s)
<div class="col-lg-4 col-md-6">
    <div class="card card-guru" style="width: 20rem; ">
        <img src="{{ asset('img/guruL.jpg') }}" alt="gambar" class="card-image-top img-fluid " style="width: 80%; left:35px; position:relative">
        <div class="card-body text-center">
            <h6>{{ $s->Nama }}</h6>
            <p>{{ $s->Mapel }}</p>
            <p>{{ $s->Alamat }}</p>
            <p>
                <a href="/dataguru/guru/edit/{{ $s->id }}"class="btn btn-warning">Edit</a>

                <a href="/dataguru/guru/hapus/{{ $s->id }}" class="btn btn-danger">Hapus</a>
            </p>
        </div>
    </div>
</div>
  @endforeach
</div> --}}




</div>
@endsection



































