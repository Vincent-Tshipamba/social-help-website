<?php

namespace Database\Seeders;

use App\Models\AideSociale;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AideSocialeSeeder extends Seeder
{
    public function run(): void
    {
        AideSociale::factory(50)->create();
    }
}
