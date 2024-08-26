<?php

namespace Database\Seeders;

use App\Models\Demandeur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemandeurSeeder extends Seeder
{
    public function run(): void
    {
        Demandeur::factory(50)->create();
    }
}
