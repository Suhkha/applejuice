<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@svelfit.com',
            'password_plain' => '',
            'password' => Hash::make('svelfit.2022'),
            'phone' => '1234567890',
            'role' => 'admin'
        ]);
    }
}
