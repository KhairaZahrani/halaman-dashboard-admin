@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
<a href="/buku/create" class="btn btn-primary">+ Tambah Data Buku</a>
<a href="/sesi/logout" class="btn btn-secondary">Logout</a>

</div>

<div>
    @if (Session('pesan'))
    <div class="alert alert-success" role="alert">{{Session('pesan')}}</div>
    @endif
</div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th>{{$loop->iteration}}</th>
                    <td>{{$item->Judul}}</td>
                    <td>{{$item->Penulis}}</td>
                    <td>{{$item->Penerbit}}</td>
                    <td>{{$item->TahunTerbit}}</td>
                    <td><a class="btn btn-secondary btn-sm" href="/buku/{{$item->BukuID}}">Detail</a>
                    <a class="btn btn-warning btn-sm" href="/buku/{{$item->BukuID}}/edit">Edit</a>
                    <form class="d-inline" action="{{'/buku/'.$item->BukuID}}" method="post">
                     @csrf
                     @method('DELETE')
                     <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                    </form></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/admin" class="btn btn-primary">>>kembali</a>
@endsection