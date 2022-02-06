<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poketype extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon',
        'color'
    ];

    public function pokeabilities()
    {
        return $this->hasMany(Pokeability::class);
    }
}
