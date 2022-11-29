@extends('Dashboard.layouts.main')


@section('container')
<h1>DATA SISWA RPL</h1>
<div class="card-body">
<a href="/datasiswa/siswa/tambah" class="btn btn-success">Input Siswa Baru</a>
<br/> <br/>

<table class="table table-bordered table-hover table-striped">
<thead align="center">
<tr>
   <th >ID</th>
   <th >NAMA</th>
   <th >KELAS</th>
   <th >JENIS KELAMIN</th> <th>ALAMAT</th>
   <th >FOTO SISWA</th>
   <th >AKSI</th>
</tr>
</thead>
<tbody>
{{-- @foreach ($siswa as $s)
<tr>
   <td>{{ $s->id }}</td>
   <td>{{ $s->Nama }}</td>
   <td>{{ $s->Kelas }}</td>
   <td>{{ $s->Jenis_kelamin }}</td>
   <td>{{ $s->Alamat }}</td> <td><img src="{{url('img/'.$s->Foto)}}" width="100px"></td>
   <td>
<a href="/datasiswa/siswa/edit/{{ $s->id }}"class="btn btn-warning m-2`">Edit</a>

<a href="/datasiswa/siswa/hapus/{{ $s->id }}" class="btn btn-danger">Hapus</a>
</td>
</tr>
@endforeach --}}
</tbody>
</table>

</div>
@endsection

