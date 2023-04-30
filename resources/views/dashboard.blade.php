@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Barang
                </div>
                <div class="card-body">
                    <p>Atur data barang meliputi nama, deskripsi, jenis, stok, harga beli, harga jual, dan gambar barang.</p>
                    <a href="{{ route('barang.index') }}" class="btn btn-primary">Kelola Barang</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Pembeli
                </div>
                <div class="card-body">
                    <p>Atur data pembeli meliputi nama, TTL, jenis kelamin, alamat, foto KTP, user, dan password.</p>
                    <a href="{{ route('pembeli.index') }}" class="btn btn-primary">Kelola Pembeli</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Staff
                </div>
                <div class="card-body">
                    <p>Atur data staff meliputi nama, jenis kelamin, user, dan password.</p>
                    <a href="{{ route('staff.index') }}" class="btn btn-primary">Kelola Staff</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection