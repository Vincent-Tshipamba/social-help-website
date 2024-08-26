<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Nature extends Model
{
    use HasFactory;

    protected $table = 'natures' ;

    protected $primaryKey = 'codnat';

    protected $fillable = [
        'libnat'
    ];

    public function aide_sociales() : HasMany
    {
        return $this->hasMany(AideSociale::class, 'codnat', 'codnat');
    }
}
