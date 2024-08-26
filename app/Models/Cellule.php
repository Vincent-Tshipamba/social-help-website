<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cellule extends Model
{
    use HasFactory;

    protected $table = 'cellules';

    protected $primaryKey = 'codcell' ;

    protected $fillable = [
        'denom',
        'adresse'
    ];

    public function demandeurs(): HasMany
    {
        return $this->hasMany(Demandeur::class, 'codcell', 'codcell');
    }
}
