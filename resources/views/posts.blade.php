@extends('layouts.main')

@section('container')

<h1 class="card-head card" style="width: 160px">BERITA</h1>
@foreach ($posts as $post)
    <article class="mb-5 card card-ku">
        <h2>
            <a style="color: #1c6758" class="text-decoration-none" href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
        </h2>
        <h5>{{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>

@endforeach

@endsection
