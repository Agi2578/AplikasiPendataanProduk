@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Pembeli</h1>
    <form action="{{ route('pembeli.update', $pembeli->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Input fields sesuai spesifikasi -->

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
