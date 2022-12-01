@extends('Dashboard.layouts.main', ['title' => 'loker tambah'])

@section('container')

<h1><center>TAMBAH LOKER</center></h1>
<br/>
<br/>

<form method="post" action="/Dashboard/loker/simpan">
      {{ csrf_field() }}

    <div class="form-group">
        <label> Id </label>
        <input type='text' name='id' class='form-control' placeholder='Masukkan Id ...'>
        @if($errors -> has('id'))
        <div class='text-danger'>
              {{$errors -> first ('id')}}
        </div>
        @endif
    </div>

    <div class="form-group">
         <label> Nama Pekerjaan </label>
         <input type='text' name='nama_pekerjaan' class='form-control' placeholder='Masukkan pekerjaan anda ...'>
            @if($errors -> has('nama_pekerjaan'))
         <div class='text-danger'>
            {{$errors -> first ('nama_pekerjaan')}}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label> Nama Perusahaan</label>
        <input type='text' name='nama_perusahaan' class='form-control' placeholder='Masukkan nama perusahaan ...'>
            @if($errors -> has('nama_perusahaan'))
        <div class='text-danger'>
            {{$errors -> first ('nama_perusahaan')}}
            </div>
            @endif
        </div>

    <div class="form-group">
        <label> Lokasi </label>
        <input type='text' name='lokasi' class='form-control' placeholder='Masukkan lokasi Perusahaan ...'>
            @if($errors -> has('lokasi'))
        <div class='text-danger'>
            {{$errors -> first ('lokasi')}}
            </div>
            @endif
        </div>

    <div class="form-group">
        <label> gaji </label>
        <input type='text' name='gaji' class='form-control' placeholder='Gaji Perusahaan ...'>
            @if($errors -> has('gaji'))
        <div class='text-danger'>
            {{$errors -> first ('gaji')}}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label> Gambar </label>
        <input type='text' name='gambar' class='form-control' placeholder='Ketikkan misal male.jpg'>
            @if($errors -> has('gambar'))
        <div class='text-danger'>
            {{$errors -> first ('gambar')}}
        </div>
        @endif
    </div>

    <br/>
    <div class="form-group">
        <a href="/Dashboard/loker" class="btn btn-primary">Kembali</a>
        <input type="submit" class="btn btn-success" value="Simpan">
    </div>
</form>
@endsection
