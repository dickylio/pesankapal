<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kapal extends Model
{
    protected $table = 'kapal';
    protected $fillable = [
        'id_fasilitas',
        'nama_kapal',
        'kapasitas',
        'harga_per_hari',
        'deskripsi',
        'status_kapal'
    ];
    
    #Relasi dengan tabel fasilitas
    public function fasilitas()
    {
        return $this->belongsTo(fasilitas::class);
    }

    #Relasi dengan tabel pemesanankapal
    public function pemesanankapal()
    {
        return $this->hasMany(PemesananKapal::class, 'id_pemesanankapal');
    }

    #Relasi dengan tabel fasilitaskapal
    public function fasilitaskapal()
    {
        return $this->hasMany(FasilitasKapal::class, 'id_kapal');
    }
}
