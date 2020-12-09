<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => Str::random(5) . ' ' . Str::random(5),
                'password' => Hash::make('password'),
                'email' => Str::random(10) . 'gmail.com',
                'last_online' => Carbon::yesterday(),
                'age' => 1,
                'sex' => 1,
                'role_id' => 1,
                'town_id' => 1
            ]
        ]);
    }
}
