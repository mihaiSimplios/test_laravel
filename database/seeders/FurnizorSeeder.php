<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Furnizor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FurnizorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Furnizor::factory()->count(10)->create()->each(function ($furnizor) {
            $furnizor->contacts()->saveMany(Contact::factory()->count(3)->make());
        });
    }
}
