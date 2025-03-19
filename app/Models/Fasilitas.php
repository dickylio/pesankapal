<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table = 'fasilitas';
    protected $fillable = [
        'gambar',
        'nama',
        'deskripsi'
    ];

    public function kapal()
    {
        return $this->belongsToMany(Kapal::class, 'fasilitaskapal', 'id_fasilitas', 'id_kapal');
    }
}
