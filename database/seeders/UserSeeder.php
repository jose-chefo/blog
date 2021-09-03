<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jose Mª Martin Lazaro',
            'email' => 'jsm.mrtn@gmail.com',
            'password' => bcrypt('Meatze2020'),
        ])->assignRole('Admin');
        
        User::factory(29)->create();
    }
}
