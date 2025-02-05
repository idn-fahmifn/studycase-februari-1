<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    // mendeklarasikan nama variabel
    protected $table = 'laporan';

    // mendeklarasikan field atau column yang ada di table laporan
    protected $fillable = [
        'id_user', 'judul_laporan', 'tanggal_laporan', 'status', 'deskripsi', 'dokumentasi'
    ];

    protected $casts = ['tanggal_laporan' => 'datetime'];

    // membuat relasi ke model User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

}
