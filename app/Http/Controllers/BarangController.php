<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $barang = Barang::all();
    return view('barang.index', compact('barang'));
}

public function create()
{
    return view('barang.create');
}

public function store(Request $request)
{
    // Validasi dan penyimpanan data
}

public function show(Barang $barang)
{
    return view('barang.show', compact('barang'));
}

public function edit(Barang $barang)
{
    return view('barang.edit', compact('barang'));
}

public function update(Request $request, Barang $barang)
{
    // Validasi dan update data
}

public function destroy(Barang $barang)
{
    $barang->delete();
    return redirect()->route('barang.index');
}
}
