<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $fillable = [
        'id_user',
        'nomor_telepon',
        'alamat'
    ];

    #Relasi dengan tabel user
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    #Relasi dengan tabel pemesanankapal
    public function pemesanankapal()
    {
         return $this->hasMany(pemesanankapal::class, 'id_pemesanankapal');
    }
}
