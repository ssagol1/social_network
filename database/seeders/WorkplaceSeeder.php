<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class WorkplaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workplaces')->insert([
            'title' => Str::random(10),
            'user_id' => 1,
            'company_id' => 1,
            'town_id' => 1,
        ]);
    }
}
