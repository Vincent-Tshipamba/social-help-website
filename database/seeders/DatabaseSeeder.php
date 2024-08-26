<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            ServiceSeeder::class,
            PastorSeeder::class,
            NatureSeeder::class,
            CelluleSeeder::class,
            DemandeurSeeder::class,
            DonateurSeeder::class,
            AnalyseSeeder::class,
            DemandeSeeder::class,
            AideSocialeSeeder::class,
            LancerSeeder::class,
            ParticiperSeeder::class,
            FaireObjetSeeder::class
        ]);
        User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
