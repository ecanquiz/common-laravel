<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            //OthersTableSeeder:class,
            StatesTableSeeder::class,
            MunicipalitiesTableSeeder::class,
            ParishesTableSeeder::class,
            CitiesTableSeeder::class,
            ZoneTypesTableSeeder::class,
            RouteTypesTableSeeder::class,
            DomicileTypesTableSeeder::class,
            MuContainerSeeder::class,
            MuMeasureUnitTypeSeeder::class,
            MuMeasureUnitSeeder::class
        ]);
    }
}
