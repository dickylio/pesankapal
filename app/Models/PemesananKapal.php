<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PemesananKapal extends Model
{
    protected $table = 'pemesanankapal';
    protected $fillable = [
        'id_pelanggan',
        'id_kapal',
        'email',
        'total_harga'
    ];

    #Relasi dengan tabel pelanggan & kapal
    public function pelanggan()
    {
        return $this->belongsTo(pelanggan::class,'user_id');
    }

    public function kapal()
    {
        return $this->belongsTo(kapal::class);
    }
}
