@extends('layout.master')
@section('title')
    Halaman Edit Cast
@endsection

@section('content')
<form method="POST" action="/cast/{{$cast->id}}">
    {{-- Validation --}}
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
    @method("put")
    <div class="form-group">
      <label>Nama Lengkap</label>
      <input type="text" value="{{$cast->nama}}" class="form-control" name="nama">
    </div>
    <div class="form-group">
      <label>Umur</label>
      <input type="number" value="{{$cast->umur}}" class="form-control" name="umur">
    </div>
    <div class="form-group">
      <label>Bio</label>
      <textarea name="bio" class="form-control" cols="30" rows="10">{{$cast->bio}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/cast" class="btn btn-danger">Back</a>
  </form>
@endsection