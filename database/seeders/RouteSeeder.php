<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('route')->insert([
            'user_id' => '1',
            'route_name' => 'Lado norte',
            'description' => 'Guyaramerin a trinidad',
            'start_location' => 'Guayaramerin',
            'end_location' => 'Trinidad',
            'active' => '1',

        ]);
    }
}
