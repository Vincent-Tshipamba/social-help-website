<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Analyse extends Model
{
    use HasFactory;

    protected $table = 'analyses';

    protected $primaryKey = 'numanalys';

    protected $fillable = [
        'objet'
    ];

    public function aide_sociales() : HasMany
    {
        return $this->hasMany(AideSociale::class, 'codanalys', 'numanalys');
    }

    public function demandeurs() : BelongsToMany
    {
        return $this->belongsToMany(Demandeur::class, 'faire_objets', 'numanalys', 'num_demandeur');
    }
}
