<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->insert([
                'name' => 'Soupy Baptiste',
                'email' => 'baptiste.soupy@gmail.com',
                'password' => Hash::make('secret1234'),
                'roles_id' => 1,
        ]);
    }
}
