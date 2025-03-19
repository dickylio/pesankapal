<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kapal extends Model
{
    protected $table = 'kapal';
    protected $fillable = [
        'nama_kapal',
        'kapasitas',
        'harga_tiket',
        'deskripsi',
        'kapasitas',
        'harga_tiket', 
        'status_kapal'
    ];
    
    #Relasi dengan tabel fasilitas
    // In your Kapal model
    public function fasilitas()
    {
        return $this->belongsToMany(Fasilitas::class, 'fasilitaskapal', 'id_kapal', 'id_fasilitas');
    }

    #Relasi dengan tabel pemesanankapal
    public function pemesanankapal():hasMany
    {
        return $this->hasMany(PemesananKapal::class, 'id_pemesanankapal');
    }

    #Relasi dengan tabel fasilitaskapal
    // public function fasilitaskapal()
    // {
    //     return $this->hasMany(FasilitasKapal::class, 'id_kapal');
    // }
}
