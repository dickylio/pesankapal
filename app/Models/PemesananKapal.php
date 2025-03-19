<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PemesananKapal extends Model
{
    protected $table = 'pemesanan_kapal';
    protected $fillable = [
        'id_pelanggan',
        'id_kapal',
        'tanggal_pemesanan',
        'jumlah_penumpang',
        'status_pemesanan',
        'total_harga'
    ];

    #Relasi dengan tabel pelanggan & kapal
    public function pelanggan():belongsTo
    {
        return $this->belongsTo(pelanggan::class);
    }

    public function kapal():belongsTo
    {
        return $this->belongsTo(kapal::class);
    }
}
