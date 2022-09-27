@extends('layouts.main')
 <style>
    .card-in {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    border-radius: 5px;
    padding: 10px;
    margin-top: 20px;
    background: #3D8361;
    color: #EEF2E6;
}
 </style>
@section('container')
    <article class="card-in mb-5 mt-3">
        <h1>{{ $post["title"] }}</h1>
        <h5>{{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>

    <a class="btn btn-danger mb-5"  href="/berita">back to berita</a>
@endsection