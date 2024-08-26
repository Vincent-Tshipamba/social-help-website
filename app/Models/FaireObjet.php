<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FaireObjet extends Model
{
    use HasFactory;

    protected $table = 'faire_objets';

    protected $fillable = [
        'datanalys',
        'reponse',
        'numanalys',
        'mumdem',
        'matri'
    ];

    public function demandeur() : BelongsTo
    {
        return $this->belongsTo(Demandeur::class, 'matri', 'num_demandeur');
    }

    public function analyse() : BelongsTo
    {
        return $this->belongsTo(Analyse::class, 'numanalys', 'numanalys');
    }

    public function demande() : BelongsTo
    {
        return $this->belongsTo(Demande::class, 'mumdem', 'mumdem');
    }
}
