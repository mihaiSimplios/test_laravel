<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacte';

    public function banci(): MorphToMany
    {
        return $this->morphedByMany(Banca::class, 'contactable');
    }

    public function clienti(): MorphToMany
    {
        return $this->morphedByMany(Client::class, 'contactable');
    }

    public function furnizori(): MorphToMany
    {
        return $this->morphedByMany(Furnizor::class, 'contactable');
    }

    public function societateLeasing(): MorphToMany
    {
        return $this->morphedByMany(SocietateLeasing::class, 'contactable');
    }
}
