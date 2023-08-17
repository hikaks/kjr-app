<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisMinuman extends Model
{
    use HasFactory;
    protected $table = 'jenis_minumans';

    protected $fillable = ['nama_minuman'];

    public function pelanggans()
    {
        return $this->hasMany(Pelanggans::class, 'id_minuman');
    }

    public function jenisGerobak()
    {
        return $this->hasOne(JenisGerobaks::class, 'id_minuman');
    }

}
