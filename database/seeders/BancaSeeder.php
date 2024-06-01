<?php

namespace Database\Seeders;

use App\Models\Banca;
use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BancaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banca::factory()->count(10)->create()->each(function ($banca) {
            $banca->contacts()->saveMany(Contact::factory()->count(3)->make());
        });
    }
}
