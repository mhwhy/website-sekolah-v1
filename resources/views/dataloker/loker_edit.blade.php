@extends('layouts.main',['title' => 'loker'])
@section('container')
    <h1>
        <center>HALAMAN EDIT LOWOGAN PEKERJAAN</center>
    </h1>
    <br />
    <br />

    <form method="post" action="/dataloker/loker/update/{{ $loker->id }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <div class="form-group">
            <label> NIK </label>
            <input type='text' name='id' class='form-control' value="{{ $loker->id }}">
            @if ($errors->has('id'))
                <div class='text-danger'>
                    {{ $errors->first('id') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label> Nama pekerjaan </label>
            <input type='text' name='nama_pekerjaan' class='form-control' value="{{ $loker->nama_pekerjaan }}">
            @if ($errors->has('nama_pekerjaan'))
                <div class='text-danger'>
                    {{ $errors->first('nama_pekerjaan') }}
                </div>
            @endif
        </div>


        <div class="form-group">
            <label> Nama perusahaan</label>
            <input type='text' name='nama_perusahaan' class='form-control' value="{{ $loker->nama_perusahaan }}">
            @if ($errors->has('nama_perusahaan'))
                <div class='text-danger'>
                    {{ $errors->first('nama_perusahaan') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label> Lokasi </label>
            <input type='text' name='lokasi' class='form-control' value="{{ $loker->lokasi }}">
            @if ($errors->has('lokasi'))
                <div class='text-danger'>
                    {{ $errors->first('lokasi') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label> Gaji </label>
            <input type='text' name='gaji' class='form-control' value="{{ $loker->gaji }}">
            @if ($errors->has('gaji'))
                <div class='text-danger'>
                    {{ $errors->first('gaji') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label> Gambar </label>
            <input type='text' name='gambar' class='form-control' value="{{ $loker->gambar }}">
            @if ($errors->has('gambar'))
                <div class='text-danger'>
                    {{ $errors->first('gambar') }}
                </div>
            @endif
        </div>

        <br />
        <div class="form-group mb-2">
            <a href="/dataloker/loker" class="btn btn-primary">Kembali</a>
            <input type="submit" class="btn btn-success" value="Simpan">
        </div>
    </form>
@endsection
