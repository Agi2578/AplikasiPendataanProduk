@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Barang</h1>
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $barang->id }}</td>
            </tr>
            <tr>
                <th>Nama Barang</th>
                <td>{{ $barang->nama_barang }}</td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{{ $barang->deskripsi }}</td>
            </tr>
            <tr>
                <th>Jenis Barang</th>
               
