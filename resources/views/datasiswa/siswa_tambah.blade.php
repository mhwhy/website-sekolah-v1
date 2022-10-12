@extends('layouts.main',['title' => 'tambah siswa'])
 @section('container')

 <h1 class="mt-5"><center>TAMBAH DATA SISWA RPL</center></h1>
 <br/>
 <br/>

<form method="post" action="/datasiswa/siswa/simpan">
{{ csrf_field() }}

    <div class="form-group">
        <label> NIS </label>
        <input type='text' name='id' class='form-control' placeholder='Masukkan NIS ...'>
        @if($errors -> has('id'))
    <div class='text-danger'>
        {{$errors -> first ('id')}}
    </div>
        @endif
    </div>

    <div class="form-group">
        <label> Nama </label>
        <input type='text' name='nama' class='form-control' placeholder='Masukkan Nama Lengkap Siswa ...'>
        @if($errors -> has('nama'))
    <div class='text-danger'>
        {{$errors -> first ('nama')}}
    </div>
        @endif
    </div>

    <div class="form-group">
        <label> Kelas</label>
        <input type='text' name='kelas' class='form-control' placeholder='Masukkan Kelas ...'>
         @if($errors -> has('kelas'))
    <div class='text-danger'>
        {{$errors -> first ('kelas')}}

    </div>
        @endif
    </div>

    <div class="form-group">
        <label> Jenis Kelamin </label>
        <input type='text' name='jenis_kelamin' class='form-control' placeholder='Masukkan Jenis Kelamin ...'>
        @if($errors -> has('jenis_kelamin'))
    <div class='text-danger'>
        {{$errors -> first ('jenis_kelamin')}}
    </div>
        @endif
    </div>

    <div class="form-group">
        <label> Alamat </label>
        <input type='text' name='alamat' class='form-control' placeholder='Masukkan Alamat Lengkap ...'>
        @if($errors -> has('alamat'))
    <div class='text-danger'>
        {{$errors -> first ('alamat')}}
    </div>
        @endif
    </div>

    <div class="form-group">
        <label> Foto </label>
        <input type='text' name='foto' class='form-control' placeholder='Ketikkan misal male.jpg'>
        @if($errors -> has('foto'))
    <div class='text-danger'>
        {{$errors -> first ('foto')}}
    </div>
        @endif
    </div>
<br/>

    <div class="form-group mb-5">
        <a href="/datasiswa/siswa" class="btn btn-primary">Kembali</a>
        <input type="submit" class="btn btn-success" value="Simpan">
    </div>
</form>
@endsection