@extends('layouts.main2',['title' => 'siswa'])

@section('container2')
<div class="container">


<h1>DATA SISWA RPL</h1>

 <br/> <br/>

 <table class="table table-bordered table-hover table-striped">
<thead align="center">
<tr>
    <th >ID</th>
    <th >NAMA</th>
    <th >KELAS</th>
    <th >JENIS KELAMIN</th> <th>ALAMAT</th>
    <th >FOTO SISWA</th>

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

</td>
</tr>
@endforeach
</tbody>
</table>

</div>
@endsection
