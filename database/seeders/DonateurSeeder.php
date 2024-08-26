<?php

namespace Database\Seeders;

use App\Models\Donateur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonateurSeeder extends Seeder
{
    public function run(): void
    {
        Donateur::factory(50)->create();
    }
}
