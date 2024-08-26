<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Demandeur extends Model
{
    use HasFactory;

    protected $fillable = [
        'noms_demandeur',
        'sexe',
        'datnais',
        'adresse',
        'contact',
        'profession',
        'departement',
        'codcell'
    ];

    public function cellule() : BelongsTo 
    {
        return $this->belongsTo(Cellule::class);
    }
}
