<?php

namespace Database\Seeders;

use App\Models\Lancer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LancerSeeder extends Seeder
{
    public function run(): void
    {
        Lancer::factory(50)->create();
    }
}
