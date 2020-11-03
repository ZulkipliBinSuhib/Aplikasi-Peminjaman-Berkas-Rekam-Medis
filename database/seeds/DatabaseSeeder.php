<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama' => 'Admin',
            'jenis_kelamin' => 'Admin',
            'username' => 'Admin',
            'password' => Hash::make('admin'),
            'tipe' => 'admin',
            
        ]);
    }
}