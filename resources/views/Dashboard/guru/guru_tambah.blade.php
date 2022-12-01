@extends('layouts.mainform2',['title' => 'tambah guru'])
 @section('container')

 <h1 class="mt-5"  style="color: #61764B"><center>TAMBAH DATA GURU RPL</center></h1>
 <br/>
 <br/>

<form method="post" style="background: #4E6C50;" action="/Dashboard/guru/simpan">
{{ csrf_field() }}

    <div class="form-group">
        <label  style="color: #E6E5A3"> NIK </label>
        <input type='text' name='id' class='form-control' placeholder='Masukkan NIK ...'>
        @if($errors -> has('id'))
    <div class='text-danger'>
        {{$errors -> first ('id')}}
    </div>
        @endif
    </div>

    <div class="form-group">
        <label  style="color: #E6E5A3"> Nama </label>
        <input type='text' name='nama' class='form-control' placeholder='Masukkan Nama Lengkap Guru ...'>
        @if($errors -> has('nama'))
    <div class='text-danger'>
        {{$errors -> first ('nama')}}
    </div>
        @endif
    </div>



    <div class="form-group">
        <label  style="color: #E6E5A3"> Mapel</label>
        <input type='text' name='mapel' class='form-control' placeholder='Masukkan mapel ...'>
         @if($errors -> has('mapel'))
    <div class='text-danger'>
        {{$errors -> first ('mapel')}}

    </div>
        @endif
    </div>

    <div class="form-group">
        <label  style="color: #E6E5A3"> Alamat </label>
        <input type='text' name='alamat' class='form-control' placeholder='Masukkan Alamat Lengkap ...'>
        @if($errors -> has('alamat'))
    <div class='text-danger'>
        {{$errors -> first ('alamat')}}
    </div>
        @endif
    </div>

    <div class="form-group">
        <label  style="color: #E6E5A3"> Foto </label>
        <input type='file' name='foto' class='form-control'>
        @if($errors -> has('foto'))
    <div class='text-danger'>
        {{$errors -> first ('foto')}}
    </div>
        @endif
    </div>
<br/>

    <div class="form-group mb-5">
        <a href="/Dashboard/guru" class="btn btn-primary">Kembali</a>
        <input type="submit" class="btn btn-success" value="Simpan">
    </div>
</form>
@endsection
