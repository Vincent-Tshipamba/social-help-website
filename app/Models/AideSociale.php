<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AideSociale extends Model
{
    use HasFactory;

    protected $table = 'aide_sociales';

    protected $primaryKey = 'numaid';

    protected $fillable = [
        'dataide',
        'motif',
        'codnat',
        'codanalys'
    ];

    public function pastors() : BelongsToMany
    {
        return $this->belongsToMany(Pastor::class, 'lancers', 'numaid', 'matri');
    }

    public function donateurs() : BelongsToMany
    {
        return $this->belongsToMany(Donateur::class, 'participers', 'numaid', 'iddonat');
    }

    public function analyse() : BelongsTo
    {
        return $this->belongsTo(Analyse::class, 'codanalys', 'numanalys');
    }

    public function nature() : BelongsTo
    {
        return $this->belongsTo(Nature::class, 'codnat', 'codnat');
    }
}
