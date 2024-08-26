<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $primaryKey = 'codserv';

    protected $fillable = [
        'libserv'
    ];

    public function pastors(): HasMany
    {
        return $this->hasMany(Pastor::class, 'codserv');
    }
}
