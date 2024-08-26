<?php

namespace Database\Seeders;

use App\Models\Demande;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemandeSeeder extends Seeder
{
    public function run(): void
    {
        Demande::factory(50)->create();
    }
}
