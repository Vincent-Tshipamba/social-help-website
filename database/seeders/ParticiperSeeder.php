<?php

namespace Database\Seeders;

use App\Models\Participer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParticiperSeeder extends Seeder
{
    public function run(): void
    {
        Participer::factory(50)->create();
    }
}
