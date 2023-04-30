<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $pembelis = Pembeli::all();
    return view('pembeli.index', compact('pembelis'));
}

public function create()
{
    return view('pembeli.create');
}

public function store(Request $request)
{
    // Validasi dan penyimpanan data
}

public function show(Pembeli $pembeli)
{
    return view('pembeli.show', compact('pembeli'));
}

public function edit(Pembeli $pembeli)
{
    return view('pembeli.edit', compact('pembeli'));
}

public function update(Request $request, Pembeli $pembeli)
{
    // Validasi dan update data
}

public function destroy(Pembeli $pembeli)
{
    $pembeli->delete();
    return redirect()->route('pembeli.index');
}

}
