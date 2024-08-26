<?php

namespace Database\Seeders;

use App\Models\Nature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NatureSeeder extends Seeder
{
    public function run(): void
    {
        Nature::factory(50)->create();
    }
}
