<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Imtiaz Osama',
            'email' => 'imtiaz.osama@mail.com',
            'password' => Hash::make('imtiaz.osama@mail.com'),
            'image' => 'default.png',
        ]);

    }
}
