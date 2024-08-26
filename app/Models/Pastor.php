<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pastor extends Model
{
    use HasFactory;

    protected $table = 'pastors';

    protected $primaryKey = 'matri';

    protected $fillable = [
        'nompast',
        'postnom',
        'prenom',
        'fonction',
        'contact',
        'codserv'
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'codserv');
    }

    public function aide_sociales() : BelongsToMany
    {
        return $this->belongsToMany(AideSociale::class, 'lancers', 'matri', 'numaid');
    }
}
