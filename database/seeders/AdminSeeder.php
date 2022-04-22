<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Mar pops',
            'email' => 'lunamail@gmail.com',
            'role'=>'admin',
            'email_verified_at'=> now(),
            'created_at' => now(),
            'updated_at' => now(),
            'password' => bcrypt('power123'),
            'remember_token' => Str::random(10),

        ]);
    }
}
