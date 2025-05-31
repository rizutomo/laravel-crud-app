<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Agama;
use App\Models\JenisPegawai;
use App\Models\StatusPegawai;
use App\Models\Pendidikan;
use App\Models\JenisKelamin;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawais = Pegawai::all();
        return view('goodapp.table-pegawai', compact('pegawais')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $agamas = Agama::all();
        $jnspgws = JenisPegawai::all();
        $stspgws = StatusPegawai::all();
        $pddks = Pendidikan::all();
        $jns_kels = JenisKelamin::all();
        return view('goodapp.form-pegawai', compact('agamas', 'jnspgws', 'stspgws','pddks', 'jns_kels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'jenis_pegawai' => 'required',
            'status_pegawai' => 'required',
            'unit' => 'required',
            'sub_unit' => 'required',
            'pendidikan' => 'required',
            'tgl_lahir' => 'required',
            'tmpt_lahir' => 'required',
            'jns_kel' => 'required',
            'agama' => 'required',
            'doc_ktp' => 'file|mimes:pdf,jpg,jpeg,png|max:2048'
        ]);

        $pegawai = new Pegawai;
        $pegawai->nama = $request->nama;
        $pegawai->nik = $request->nik;
        $pegawai->jenis_pegawai = $request->jenis_pegawai;
        $pegawai->status_pegawai = $request->status_pegawai;
        $pegawai->unit = $request->unit;
        $pegawai->sub_unit = $request->sub_unit;
        $pegawai->pendidikan = $request->pendidikan;
        $pegawai->tgl_lahir = $request->tgl_lahir;
        $pegawai->tmpt_lahir = $request->tmpt_lahir;
        $pegawai->jns_kel = $request->jns_kel;
        $pegawai->agama = $request->agama;
        if ($request->hasFile('doc_ktp')) {
            $ktpDocument = $request->file('doc_ktp');
            $ktpDocumentPath = $ktpDocument->store('doc_ktps', 'public');

            // Save the KTP document path to the database
            $pegawai->doc_ktp = $ktpDocumentPath;
        }
        $pegawai->save();
        
        return redirect('/table-pegawai');
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
        $pegawai = Pegawai::find($id);
        $agamas = Agama::all();
        $jnspgws = JenisPegawai::all();
        $stspgws = StatusPegawai::all();
        $pddks = Pendidikan::all();
        $jns_kels = JenisKelamin::all();
        return view('goodapp.edit-pegawai', compact('pegawai','agamas', 'jnspgws', 'stspgws','pddks', 'jns_kels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $pegawai = Pegawai::find($id);
        $pegawai->nama = $request->nama;
        $pegawai->nik = $request->nik;
        $pegawai->jenis_pegawai = $request->jenis_pegawai;
        $pegawai->status_pegawai = $request->status_pegawai;
        $pegawai->unit = $request->unit;
        $pegawai->sub_unit = $request->sub_unit;
        $pegawai->pendidikan = $request->pendidikan;
        $pegawai->tgl_lahir = $request->tgl_lahir;
        $pegawai->tmpt_lahir = $request->tmpt_lahir;
        $pegawai->jns_kel = $request->jns_kel;
        $pegawai->agama = $request->agama;
        if ($request->hasFile('doc_ktp')) {
            $docKtp = $request->file('doc_ktp');
            $docKtpPath = $docKtp->store('doc_ktps', 'public');

            // Save the KTP document path to the database
            $pegawai->doc_ktp = $docKtpPath;
        }
        $pegawai->save();
        return redirect('table-pegawai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return redirect('/table-pegawai');
    }
}
