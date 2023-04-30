@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Pembeli</h1>
    <a href="{{ route('pembeli.create') }}" class="btn btn-primary mb-3">Tambah Pembeli</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>TTL</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pembelis as $pembeli)
                <tr>
                    <td>{{ $pembeli->id }}</td>
                    <td>{{ $pembeli->nama }}</td>
                    <td>{{ $pembeli->ttl }}</td>
                    <td>{{ $pembeli->jenis_kelamin }}</td>
                    <td>{{ $pembeli->alamat }}</td>
                    <td>
                        <a href="{{ route('pembeli.show', $pembeli->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('pembeli.edit', $pembeli->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('pembeli.destroy', $pembeli->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
