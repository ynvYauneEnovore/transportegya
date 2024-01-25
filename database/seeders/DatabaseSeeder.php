<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = User::create([
            'name' => 'Admin Admin', 
            'email' => 'samuel@admin.com',
            'password' => bcrypt('67910101'),
            'type'=>1,
        ]);

        $user = User::create([
            'name' => 'Usuario normal', 
            'email' => 'normal@admin.com',
            'password' => bcrypt('12345678'),
            'type'=>0,
        ]);

        $user = User::create([
            'name' => 'Usuario Afiliado', 
            'email' => 'afiliado@admin.com',
            'password' => bcrypt('12345678'),
            'type'=>2,
        ]);
    }
}
