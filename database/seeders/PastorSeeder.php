<?php

namespace Database\Seeders;

use App\Models\Pastor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PastorSeeder extends Seeder
{
    public function run(): void
    {
        Pastor::factory(50)->create();
    }
}
