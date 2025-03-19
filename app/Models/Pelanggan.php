<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $fillable = [
        'user_id',
        'nomor_telepon',
        'alamat'
    ];

    #Relasi dengan tabel user
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    #Relasi dengan tabel pemesanankapal
    public function pemesanankapal():hasMany
    {
         return $this->hasMany(pemesanankapal::class);
    }
}
