<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rute extends Model
{
    protected $table = 'kapal';
    protected $fillable = [
        'rute'
    ];


    #relasi dengan kapal
    public function kapal():hasMany
    {
        return $this->hasMany(kapal::class);
    }
}
