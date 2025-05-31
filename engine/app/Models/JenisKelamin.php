<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKelamin extends Model
{
    use HasFactory;
    protected $table = 'jns_kel';
    protected $primaryKey = 'id';
    public function pegawai()
    {
        return $this->hasMany(Pegawai::class, 'jns_kel');
    }
}
