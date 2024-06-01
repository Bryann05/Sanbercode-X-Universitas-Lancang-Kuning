@extends('layout.master')
@section('title')
    Halaman Detail Cast
@endsection

@section('content')

<h1>{{$cast->name}}</h1>
<p>{{$cast->bio}}</p>

<a href="/cast" class="btn btn-secondary btn-sm">Kembali</a>
@endsection