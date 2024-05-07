<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('user_type_master')->insert([
            'user_type' => 'student'
        ]);
        DB::table('user_type_master')->insert([
            'user_type' => 'teacher'
        ]);
    }
}
