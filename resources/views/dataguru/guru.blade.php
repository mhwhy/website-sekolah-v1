@extends('layouts.main2',['title' => 'guru'])

@section('container2')
<div class="container">


<h1>DATA Guru RPL</h1>
 <div class="card-body">
 <a href="/dataguru/guru/tambah" class="btn btn-success">Input Guru Baru</a>
 <br/> <br/>
@foreach ($guru as $s)
<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{url('img/'.$s->Foto)}}" width="100px">
        <div class="card-body">
            <h5>ID       :<p>{{ $s->id }}</p></h5>
            <h5>NAMA     :<p>{{ $s->Nama }}</p></h5>
            <h5>JENIS KEL:<p>{{ $s->Jenis_kelamin }}</p></h5>
            <h5>MAPEL    :<p>{{ $s->Mapel }}</p></h5>
            <h5>ALAMAT   :<p>{{ $s->Alamat }}</p></h5>  <p></p>
    <p>
<a href="/dataguru/guru/edit/{{ $s->id }}"class="btn btn-warning">Edit</a>

<a href="/dataguru/guru/hapus/{{ $s->id }}" class="btn btn-danger">Hapus</a>
</p>

</div>
</div>
</div>
</div>


@endforeach


</div>
  </div>
@endsection
