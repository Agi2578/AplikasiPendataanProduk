@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Barang</h1>
    <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Input fields sesuai spesifikasi -->

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
