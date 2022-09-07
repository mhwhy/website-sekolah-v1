@extends('layouts.main')
@section('container')

<h1 class="text-center">Halaman Kontak</h1>
<h1>{{ $name }}</h1>
<h1>{{ $email }}</h1>
<img src="assets/img/<?=$image;?>" alt="" width="200">

@endsection