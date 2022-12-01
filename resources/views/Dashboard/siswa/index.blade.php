
@extends('Dashboard.layouts.main',['title' => 'siswa'])

@section('container')

<div class="container">



    <div class="card">
        <div class="card-header" >
            <a href="/Dashboard/siswa/tambah" class="btn btn-success "><i class="fa-solid fa-folder-plus pe-2"></i>Data Siswa</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover table-striped">
                <thead align="center">
                <tr style="background: #BCEAD5">
                   <th >ID</th>
                   <th >NAMA</th>
                   <th >KELAS</th>
                   <th >JENIS KELAMIN</th>
                   <th>ALAMAT</th>
                   <th >FOTO SISWA</th>
                   <th >AKSI</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($siswa as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->Nama }}</td>
            <td>{{ $s->Kelas }}</td>
            <td>{{ $s->Jenis_kelamin }}</td>
            <td>{{ $s->Alamat }}</td> <td><img src="{{url('img/'.$s->Foto)}}" width="100px"></td>
            <td>
                <a href="/Dashboard/siswa/edit/{{ $s->id }}"class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="/Dashboard/siswa/hapus/{{ $s->id }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
          @endforeach
        </tbody>
        </table>
        </div>
      </div>




</div>
@endsection



