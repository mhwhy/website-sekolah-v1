@extends('layouts.mainform2',['title' => 'tambah siswa'])
<h1 class="mt-5 " style="color: #E6E5A3"><center>TAMBAH DATA SISWA RPL</center></h1>
 @section('container')


<form method="post" action="/Dashboard/siswa"  style="background: #7D8F69">
{{ csrf_field() }}



    <div class="form-group" style=" padding-top:10px">
        <label style="color: #E6E5A3"> NIS </label>
        <input type='text' name='id' class='form-control' placeholder='Masukkan NIS ...'>
        @if($errors -> has('id'))
    <div class='text-danger'>
        {{$errors -> first ('id')}}
    </div>
        @endif
    </div>

    <div class="form-group">
        <label style="color: #E6E5A3"> Nama </label>
        <input type='text' name='nama' class='form-control' placeholder='Masukkan Nama Lengkap Siswa ...'>
        @if($errors -> has('nama'))
    <div class='text-danger'>
        {{$errors -> first ('nama')}}
    </div>
        @endif
    </div>

    <div class="form-group">
        <label style="color: #E6E5A3"> Kelas</label>
        <input type='text' name='kelas' class='form-control' placeholder='Masukkan Kelas ...'>
         @if($errors -> has('kelas'))
    <div class='text-danger'>
        {{$errors -> first ('kelas')}}

    </div>
        @endif
    </div>

    <div class="form-group">
        <label style="color: #E6E5A3"> Jenis Kelamin </label>
        <input type='text' name='jenis_kelamin' class='form-control' placeholder='Masukkan Jenis Kelamin ...'>
        @if($errors -> has('jenis_kelamin'))
    <div class='text-danger'>
        {{$errors -> first ('jenis_kelamin')}}
    </div>
        @endif
    </div>

    <div class="form-group">
        <label style="color: #E6E5A3"> Alamat </label>
        <input type='text' name='alamat' class='form-control' placeholder='Masukkan Alamat Lengkap ...'>
        @if($errors -> has('alamat'))
    <div class='text-danger'>
        {{$errors -> first ('alamat')}}
    </div>
        @endif
    </div>

    <div class="form-group">
        <label style="color: #E6E5A3"> Foto </label>
        <input type='file' name='foto' class='form-control' placeholder='Ketikkan misal male.jpg'>
        @if($errors -> has('foto'))
    <div class='text-danger'>
        {{$errors -> first ('foto')}}
    </div>
        @endif
    </div>
<br/>

    <div class="form-group mb-5">
        <a href="/Dashboard/siswa" class="btn1 btn btn-primary">Kembali</a>
        <input type="submit" class="btn2 btn" value="Simpan">
    </div>
</form>
<style>
    .btn2{
        background:#2a4c29;
        color:white;
    }

    .btn2:hover{

        background: #158111;
        color: #E6E5A3

    }

    .btn1{
        background: #FF5858;
    }
    .btn1:hover{
        background: #820202;
        color: white
    }
</style>
@endsection
