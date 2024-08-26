<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cellule extends Model
{
    use HasFactory;

    protected $fillable = [
        'denom',
        'adresse'
    ];

    public function demandeur(): HasMany
    {
        return $this->hasMany(Demandeur::class);
    }
}
