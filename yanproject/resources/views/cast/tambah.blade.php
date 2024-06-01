@extends('layout.master')
@section('title')
    Halaman Tambah
@endsection
@section('content')
    
<form method="POST" action="/cast">
    {{-- Validasi --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
        
    @endif

    {{-- Form Input --}}
    @csrf
    <div class="form-group">
        <label >
            Nama
        </label>
        <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <label >
            Umur
        </label>
        <input type="text" class="form-control" name="umur">
    </div>
    <div class="form-group">
        <label >
            Bio
        </label>
        <input type="text" class="form-control" name="bio">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection