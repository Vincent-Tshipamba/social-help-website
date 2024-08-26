<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Demandeur extends Model
{
    use HasFactory;

    protected $table = 'demandeurs';

    protected $primaryKey = 'num_demandeur';

    protected $fillable = [
        'noms_demandeur',
        'sexe',
        'datnais',
        'adresse',
        'contact',
        'profess',
        'departement',
        'codcell'
    ];

    public function cellule() : BelongsTo
    {
        return $this->belongsTo(Cellule::class, 'codcell', 'codcell');
    }

    public function analyses() : BelongsToMany
    {
        return $this->belongsToMany(Analyse::class, 'faire_objets', 'num_demandeur', 'numanalys');
    }
}
