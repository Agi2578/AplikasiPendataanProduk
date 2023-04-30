@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Pembeli</h1>
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $pembeli->id }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $pembeli->nama }}</td>
            </tr>
            <tr>
                <th>TTL</th>
                <td>{{ $pembeli->ttl }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $pembeli->jenis_kelamin }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $pembeli->alamat }}</td>
            </tr>
            <tr>
                <th>Foto KTP</th>
                <td>
                    <img src="{{ Storage::url($pembeli->foto_ktp) }}" alt="Foto KTP" width="200">
                </td>
            </tr>
            <tr>
                <th>User</th>
                <td>{{ $pembeli->user->username }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('pembeli.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
