@extends('Dashboard.layouts.main')
@section('container')
    <h1>Halo {{ auth()->user()->name }}</h1>
@endsection
