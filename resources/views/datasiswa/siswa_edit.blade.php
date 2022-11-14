@extends('layouts.mainform',['title' => 'tambah siswa'])
 @section('container')

 <h1 class="mt-5 text-white "><center>EDIT DATA SISWA RPL</center></h1>
 <br/>
 <br/>

<form method="post" action="/datasiswa/siswa/update/{{ $siswa->id }}" style="background: #7D8F69">
{{ csrf_field() }}
{{ method_field('PUT') }}

    <div class="form-group" style="padding-top: 100px">
        <label class="text-white"> NIS </label>
        <input type='text' name='id' class='form-control' value="{{ $siswa->id }}" placeholder='Masukkan NIS ...'>
        @if($errors -> has('id'))
    <div class='text-danger'>
        {{$errors -> first ('id')}}
    </div>
        @endif
    </div>

    <div class="form-group">
        <label class="text-white"> Nama </label>
        <input type='text' name='nama' class='form-control' value="{{ $siswa->Nama }}" placeholder='Masukkan Nama Lengkap Siswa ...'>
        @if($errors -> has('nama'))
    <div class='text-danger'>
        {{$errors -> first ('nama')}}
    </div>
        @endif
    </div>

    <div class="form-group">
        <label class="text-white"> Kelas</label>
        <input type='text' name='kelas' class='form-control' value="{{ $siswa->Kelas }}" placeholder='Masukkan Kelas ...'>
         @if($errors -> has('kelas'))
    <div class='text-danger'>
        {{$errors -> first ('kelas')}}

    </div>
        @endif
    </div>

    <div class="form-group">
        <label class="text-white"> Jenis Kelamin </label>
        <input type='text' name='jenis_kelamin' class='form-control' value="{{ $siswa->Jenis_kelamin }}" placeholder='Masukkan Jenis Kelamin ...'>
        @if($errors -> has('jenis_kelamin'))
    <div class='text-danger'>
        {{$errors -> first ('jenis_kelamin')}}
    </div>
        @endif
    </div>

    <div class="form-group">
        <label class="text-white"> Alamat </label>
        <input type='text' name='alamat' class='form-control' value="{{ $siswa->Alamat }}" placeholder='Masukkan Alamat Lengkap ...'>
        @if($errors -> has('alamat'))
    <div class='text-danger'>
        {{$errors -> first ('alamat')}}
    </div>
        @endif
    </div>

    <div class="form-group ">
        <label class="text-white"> Foto </label>
        <input type='text' name='foto' class='form-control' value="{{ $siswa->Foto }}" placeholder='Ketikkan misal male.jpg'>
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
