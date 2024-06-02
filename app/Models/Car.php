<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    // O masina are un singur motor
    public function engine(): HasOne
    {
        return $this->hasOne(Engine::class);
    }

    // O masina poate fi condusa de mai multi soferi
    public function drivers(): HasMany
    {
        return $this->hasMany(Driver::class);
    }
}
