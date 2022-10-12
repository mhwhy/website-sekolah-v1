@extends('layouts.main2',['title' => 'guru'])

@section('container2')
<div class="container">


<h1>DATA Guru RPL</h1>
 <div class="card-body">
 <a href="/dataguru/guru/tambah" class="btn btn-success">Input Guru Baru</a>
 <br/> <br/>

 <table class="table table-bordered table-hover table-striped p-5">
<thead align="center">
<tr>
    <th >ID</th>
    <th >NAMA</th>
    <th >JENIS KELAMIN</th>
    <th>MAPEL</th>
    <th>ALAMAT</th>
    <th >FOTO GURU</th>
    <th >AKSI</th>
</tr>
</thead>
<tbody>
@foreach ($guru as $s)
<tr>
    <td>{{ $s->id }}</td>
    <td>{{ $s->Nama }}</td>
    <td>{{ $s->Jenis_kelamin }}</td>
    <td>{{ $s->Mapel }}</td>
    <td>{{ $s->Alamat }}</td> <td><img src="{{url('img/'.$s->Foto)}}" width="100px"></td>
    <td>
<a href="/dataguru/guru/edit/{{ $s->id }}"class="btn btn-warning">Edit</a>

<a href="/dataguru/guru/hapus/{{ $s->id }}" class="btn btn-danger">Hapus</a>
</td>
</tr>
@endforeach
</tbody>
</table>



</div>
  </div>
@endsection