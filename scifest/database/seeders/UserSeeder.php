<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  
        DB::table('tbl_users')->insert([
            'nama' => 'Lembaga Pekebun',
            'username' => 'lembaga_pekebun',
            'password' => Hash::make('admin'),
            'roles_id' => 2,
        ]);
    }
}
