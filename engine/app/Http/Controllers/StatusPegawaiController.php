<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StatusPegawai;

class StatusPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stspegawai = StatusPegawai::all();
        return view('stspegawai.table', compact('stspegawai')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stspegawai.form');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'status_pegawai' => 'required'
        ]);

        $stspegawai = new StatusPegawai;
        $stspegawai->status_pegawai = $request->status_pegawai;
        $stspegawai->save();
        
        return redirect('/table-stspegawai');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stspegawai = StatusPegawai::find($id);
        return view('stspegawai.edit', compact('stspegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $stspegawai = StatusPegawai::find($id);
        $stspegawai->status_pegawai = $request->status_pegawai;
        $stspegawai->save();
        return redirect('/table-stspegawai');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stspegawai = StatusPegawai::find($id);
        $stspegawai->delete();
        return redirect('/table-stspegawai');
    }
}
