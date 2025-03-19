<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FasilitasKapal extends Model
{
    protected $table = 'fasilitas';
    protected $fillable = [
        'id_kapal',
        'id_fasilitas'
    ];

    #Relasi dengan tabel fasilitas
    public function fasilitas():belongsTo
    {
        return $this->belongsTo(Fasilitas::class, 'id_fasilitas');
    }

    #Relasi dengan tabel kapal
    public function kapal():belongsTo
    {
        return $this->belongsTo(Kapal::class, 'id_kapal');
    }
}
