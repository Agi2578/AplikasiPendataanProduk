<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $staffs = Staff::all();
    return view('staff.index', compact('staffs'));
}

public function create()
{
    return view('staff.create');
}

public function store(Request $request)
{
    // Validasi dan penyimpanan data
}

public function show(Staff $staff)
{
    return view('staff.show', compact('staff'));
}

public function edit(Staff $staff)
{
    return view('staff.edit', compact('staff'));
}

public function update(Request $request, Staff $staff)
{
    // Validasi dan update data
}

public function destroy(Staff $staff)
{
    $staff->delete();
    return redirect()->route('staff.index');
}

}
