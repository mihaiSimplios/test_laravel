<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clienti';

    public function contacts(): MorphToMany
    {
        return $this->morphToMany(Contact::class, 'contactable');
    }
}
