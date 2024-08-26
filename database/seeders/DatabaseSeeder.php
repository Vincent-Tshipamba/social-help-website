<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AideSocialeSeeder::class,
            AnalyseSeeder::class,
            CelluleSeeder::class,
            DemandeSeeder::class,
            DemandeurSeeder::class,
            DonateurSeeder::class,
            FaireObjetSeeder::class,
            LancerSeeder::class,
            NatureSeeder::class,
            ParticiperSeeder::class,
            ServiceSeeder::class,
            PastorSeeder::class
        ]);
        User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
