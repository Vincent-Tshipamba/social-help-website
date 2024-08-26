<?php

namespace App\Models;

use App\Models\AideSociale;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Donateur extends Model
{
    use HasFactory;

    protected $table = 'donateurs';

    protected $primaryKey = 'iddonat';

    protected $fillable = [
        'nomsdonat',
        'adresse',
        'telephone',
        'profess'
    ];

    public function aide_sociales() : BelongsToMany
    {
        return $this->belongsToMany(AideSociale::class, 'participers', 'iddonat', 'numaid');
    }
}
