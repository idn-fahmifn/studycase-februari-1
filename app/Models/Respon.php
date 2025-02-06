<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Respon extends Model
{
    protected $table = 'respon';

    protected $fillable = [
        'id_laporan', 'judul_respon', 'tanggal_respon', 'deskripsi', 'dokumentasi'
    ];

    public function laporan()
    {
        return $this->belongsTo(Laporan::class, 'id_laporan');
    }
}
