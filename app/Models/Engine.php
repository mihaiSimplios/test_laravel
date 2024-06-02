<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Engine extends Model
{
    use HasFactory;

    protected $table = 'engines';

    public function car(): HasOne
    {
        return $this->hasOne(Car::class);
    }
}
