<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lancer extends Model
{
    use HasFactory;

    protected $table = 'lancers';

    protected $fillable = [
        'datelan',
        'datlimit',
        'heure',
        'motif',
        'montbesoin',
        'matri',
        'numaid'
    ];

    public function pastor() : BelongsTo
    {
        return $this->belongsTo(Pastor::class, 'matri');
    }

    public function aide_sociale() : BelongsTo
    {
        return $this->belongsTo(AideSociale::class, 'numaid');
    }
}
