<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\SocietateLeasing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocietateLeasingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SocietateLeasing::factory()->count(10)->create()->each(function ($societateLeasing) {
            $societateLeasing->contacts()->saveMany(Contact::factory()->count(3)->make());
        });
    }
}
