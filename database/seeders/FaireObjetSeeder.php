<?php

namespace Database\Seeders;

use App\Models\FaireObjet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaireObjetSeeder extends Seeder
{
    public function run(): void
    {
        FaireObjet::factory(50)->create();
    }
}
