<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\User;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'nomor_telepon',
        'email',
        'alamat_lengkap'
    ];

    #Relasi dengan tabel user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    #Relasi dengan tabel pemesanankapal
    public function pemesanankapal():hasMany
    {
         return $this->hasMany(pemesanankapal::class);
    }
}
