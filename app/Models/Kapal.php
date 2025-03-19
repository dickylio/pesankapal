<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kapal extends Model
{
    protected $table = 'kapal';
    protected $fillable = [
        'id_rute',
        'gambar',
        'nama_kapal',
        'deskripsi',
        'kapasitas',
        'harga_tiket', 
        'status_kapal'
    ];
    
    #Relasi dengan tabel fasilitas
    public function fasilitas():belongsTo
    {
        return $this->belongsTo(fasilitas::class, 'id_fasilitas');
    }

    #Relasi dengan tabel Rute
    public function rute():belongsTo
    {
        return $this->belongsTo(rute::class, 'id_rute');
    }

    #Relasi dengan tabel pemesanankapal
    public function pemesanankapal():hasMany
    {
        return $this->hasMany(pemesanankapal::class);
    }
}
