<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'nama',
        'nik',
        'jenis_pegawai',
        'status_pegawai',
        'unit',
        'sub_unit',
        'pendidikan',
        'tgl_lahir',
        'tmpt_lahir',
        'jns_kel',
        'agama',
        'doc_ktp'
    ];
    public function fAgama()
    {
        return $this->belongsTo(Agama::class, 'agama');
    }
    public function fJenisPegawai()
    {
        return $this->belongsTo(JenisPegawai::class, 'jenis_pegawai');
    }
    public function fStatusPegawai()
    {
        return $this->belongsTo(StatusPegawai::class, 'status_pegawai');
    }
    public function fPendidikan()
    {
        return $this->belongsTo(Pendidikan::class, 'pendidikan');
    }
    public function fJns_kel()
    {
        return $this->belongsTo(JenisKelamin::class, 'jns_kel');
    }
}
