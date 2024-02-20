<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
            'name'=>'RidhoKarunia',
            'email'=>'sigma@gmail.com',
            'password'=>Hash::make('123')
            ],
            [
            'name'=>'AlvinDimas',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('123')
            ]
        ]);

        
    }
}
