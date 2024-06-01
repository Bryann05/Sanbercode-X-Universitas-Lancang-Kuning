@extends('layout.master')
@section('title')
    Halaman Tampilan
@endsection

@section('content')

<a href="/cast/create" class="btn btn-sm btn-primary">Tambah</a>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Umur</th>
        <th scope="col">Bio</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($cast as $key => $item)
      <tr>
        <th scope="row">{{$key + 1}}</th>
        <td>{{$item->nama}}</td>
        <td>{{$item->umur}}</td>
        <td>
            <form action="/cast/{{$item->id}}" method="POST">
                <a href="/cast/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                <a href="/cast/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                @csrf
                @method("Delete")
                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
            </form>
        </td>
      </tr>
      @empty
          <tr>
            <td>Tabel Tidak Ada!</td>
          </tr>
      @endforelse
      
    </tbody>
  </table>

@endsection