<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fasilitas extends Model
{
    protected $table = 'fasilitas';
    protected $fillable = [
        'gambar',
        'nama',
        'deskripsi'
    ];

    public function kapal(): hasMany
    {
        return $this->hasMany(Kapal::class);
    }
}
