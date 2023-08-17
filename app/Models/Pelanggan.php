<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pelanggan', 'email', 'telepon', 'id_minuman', 'id_gerobak',
    ];

    public function jenisMinuman()
    {
        return $this->belongsTo(JenisMinuman::class, 'id_minuman');
    }

    public function jenisGerobak()
    {
        return $this->belongsTo(JenisGerobak::class, 'id_gerobak');
    }
}
