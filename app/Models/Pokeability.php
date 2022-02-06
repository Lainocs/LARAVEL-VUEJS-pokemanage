<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokeability extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'poketype_id',
    ];

    public function poketype()
    {
        return $this->belongsTo(Poketype::class);
    }
}
