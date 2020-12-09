<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CompanySeeder::class,
            RoleSeeder::class,
            TownSeeder::class,
            UserSeeder::class,
            MessageSeeder::class,
            JobApplicationSeeder::class,
            WorkplaceSeeder::class
        ]);
    }
}
