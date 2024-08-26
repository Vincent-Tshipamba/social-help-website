<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pastor extends Model
{
    use HasFactory;

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
        return $this->belongsTo(Service::class);
    }
}
