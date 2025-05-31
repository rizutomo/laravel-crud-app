<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisKelamin;
class JenisKelaminController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jnskelamin = JenisKelamin::all();
        return view('jnskelamin.table', compact('jnskelamin')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jnskelamin.form');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'jns_kel' => 'required'
        ]);

        $jns_kel = new JenisKelamin;
        $jns_kel->jns_kel = $request->jns_kel;
        $jns_kel->save();
        
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
        $jns_kel = JenisKelamin::find($id);
        return view('jnskelamin.edit', compact('jnskelamin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jns_kel = JenisKelamin::find($id);
        $jns_kel->jns_kel = $request->jns_kel;
        $jns_kel->save();
        return redirect('/table');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jns_kel = JenisKelamin::find($id);
        $jns_kel->delete();
        return redirect('/table');
    }
}
