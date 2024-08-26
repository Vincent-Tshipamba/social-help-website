<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Participer extends Model
{
    use HasFactory;

    protected $table = 'participers';

    protected $fillable = [
        'datcontribu',
        'motifcontr',
        'heure',
        'montantcontr',
        'modeparticipat',
        'observation',
        'numaid',
        'iddonat'
    ];

    public function aide_sociale() : BelongsTo
    {
        return $this->belongsTo(AideSociale::class, 'numaid', 'numaid');
    }

    public function donateur() : BelongsTo
    {
        return $this->belongsTo(Donateur::class, 'iddonat', 'iddonat');
    }
}
