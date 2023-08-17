<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisGerobak extends Model
{
    use HasFactory;

    protected $table = 'jenis_gerobaks';

    protected $fillable = ['nama_gerobak', 'id_minuman'];

    public function pelanggans()
    {
        return $this->hasMany(Pelanggans::class, 'id_gerobak');
    }

    public function jenisMinuman()
    {
        return $this->belongsTo(JenisMinumans::class, 'id_minuman');
    }
}
