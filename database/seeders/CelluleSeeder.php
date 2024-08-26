<?php

namespace Database\Seeders;

use App\Models\Cellule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CelluleSeeder extends Seeder
{
    public function run(): void
    {
        Cellule::factory(50)->create();
    }
}
