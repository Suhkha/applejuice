<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GeneralUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin.nutricion.fitness',
            'email' => 'admin@svelfit.com',
            'password_plain' => '',
            'password' => Hash::make('h1T2WyJieBjjfqX'),
            'phone' => '4431375670',
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'username' => 'recepcion.svelfit.club',
            'email' => 'admin@svelfit.com',
            'password_plain' => '',
            'password' => Hash::make('a6KGH2z0Ep4RcLT'),
            'phone' => '4431375670',
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'username' => 'kariana.svelfit.club',
            'email' => 'admin@svelfit.com',
            'password_plain' => '',
            'password' => Hash::make('wdGfWbXciyH2S2A'),
            'phone' => '4435057742',
            'role' => 'admin'
        ]);
    }
}
