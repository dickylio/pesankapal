<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FasilitasKapal extends Model
{
    protected $table = 'fasilitas';
    protected $fillable = [
        'id_kapal',
        'id_fasilitas'
    ];

    #Relasi dengan tabel fasilitas
    public function fasilitas()
    {
        return $this->belongsTo(Fasilitas::class);
    }

    #Relasi dengan tabel kapal
    public function kapal()
    {
        return $this->belongsTo(Kapal::class, 'id_kapal');
    }
}
