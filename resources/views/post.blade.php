@extends('layouts.main')

@section('container')
<h1>Halaman berita</h1>
    <article>
        <h1>{{ $post["title"] }}</h1>
        <h5>{{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>
    <a href="/berita">back to berita</a>
@endsection