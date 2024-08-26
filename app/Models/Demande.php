<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Demande extends Model
{
    use HasFactory;

    protected $table = 'demandes';

    protected $primaryKey = 'numdem';

    protected $fillable = [
        'datdem',
        'motif',
        'heuredem',
        'montdema',
        'num_demandeur'
    ];

    public function demandeur() : BelongsTo
    {
        return $this->belongsTo(Demandeur::class, 'num_demandeur', 'num_demandeur');
    }

    public function demandeurs() : BelongsToMany
    {
        return $this->belongsToMany(Demandeur::class, 'faire_objets', 'numdem', 'num_demandeur');
    }
}
