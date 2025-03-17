<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PemesananKapal extends Model
{
    protected $table = 'pemesanan_kapal';
    protected $fillable = [
        'id_pelanggan',
        'id_kapal',
        'tanggal_check_in',
        'tanggal_check_out',
        'status_pemesanan',
        'total_harga'
    ];

    #Relasi dengan tabel pelanggan & kapal
    public function pelanggan()
    {
        return $this->belongsTo(pelanggan::class);
    }

    public function kapal()
    {
        return $this->belongsTo(kapal::class);
    }
}
