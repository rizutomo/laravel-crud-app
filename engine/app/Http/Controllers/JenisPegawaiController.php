<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisPegawai;

class JenisPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jnspegawai = JenisPegawai::all();
        return view('jnspegawai.table', compact('jnspegawai')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jnspegawai.form');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'jenis_pegawai' => 'required'
        ]);

        $jnspegawai = new JenisPegawai;
        $jnspegawai->jenis_pegawai = $request->jenis_pegawai;
        $jnspegawai->save();
        
        return redirect('/table');
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
        $jnspegawai = JenisPegawai::find($id);
        return view('jnspegawai.edit', compact('jnspegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jnspegawai = JenisPegawai::find($id);
        $jnspegawai->jenis_pegawai = $request->jenis_pegawai;
        $jnspegawai->save();
        return redirect('/table');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jnspegawai = JenisPegawai::find($id);
        $jnspegawai->delete();
        return redirect('/table');
    }
}
